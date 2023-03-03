<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

	public function index()
	{
		$this->load->view('chat_view');
	}

	public function get_response()
	{
		$input_text = $this->input->post('text');

		if ($input_text != '') {
			if (strpos($input_text, 'hari ini hari apa ya?') !== false) {
				$answer = "hari ini adalah hari-hari biasa tanpa dia yang dulu pernah jadi hari-hari mu! :)";
			} else {
				$response = $this->send_request_to_gpt($input_text);
				$data = json_decode($response);
				$answer = $data->choices[0]->message->content;
			}
		} else {
			$answer = "masukan pertanyaan kamu!!";
		}


		if ($answer) {
			echo $answer;
		} else {
			echo "mohon maaf bisa diulang?";
		}
	}

	private function send_request_to_gpt($input_text)
	{
		$curl = curl_init();

		$json = json_encode(array(
			"model" => "gpt-3.5-turbo",
			"messages" => array(array(
				"role" => "user",
				// "content" => "saya memiliki table dengan relasi mahasiswa (id[pk],nama,id_kelas[fk],id_matakuliah[fk],nilai), kelas (id[pk],nama_ruangan), matakuliah(id[pk],nama). buatkan saya query sql untuk $input_text. saya ingin jawaban singkat hanya query sql nya saja."
				"content" => $input_text
			))
		));

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.openai.com/v1/chat/completions',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => $json,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json',
				'Authorization: Bearer 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'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
	}
}
