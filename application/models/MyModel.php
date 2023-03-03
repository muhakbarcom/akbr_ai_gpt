<?php
class MyModel extends CI_Model
{

  public function send_request_to_openai($input_text)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.openai.com/v1/engines/davinci-codex/completions',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => '{
              "prompt": "' . $input_text . '",
              "max_tokens": 50,
              "temperature": 0.5
            }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Bearer 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'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
  }

  public function insert_to_database($input_text)
  {
    $response = $this->send_request_to_openai($input_text);

    $data = array(
      'input_text' => $input_text,
      'output_text' => $response
    );

    $this->db->insert('mahasiswa', $data);
  }
}
