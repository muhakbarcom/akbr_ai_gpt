<!DOCTYPE html>
<html>

<head>
  <title>Chat with ChatGPT</title>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@3.11.0/dist/tf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/gpt2@3.0.0/dist/browser.umd.min.js"></script>
</head>

<body>
  <h1>Chat with ChatGPT</h1>
  <div id="chat"></div>
  <script>
    // Buat variabel untuk menyimpan model GPT-2
    var model;

    // Buat fungsi untuk memuat model GPT-2 dari TensorFlow Hub
    async function loadModel() {
      model = await tf.loadGraphModel('https://tfhub.dev/tensorflow/gpt2/medium/2');
    }

    // Buat fungsi untuk mengirim pesan ke ChatGPT dan menampilkan balasan
    async function sendMessage(message) {
      // Buat teks prompt dengan format "user: <pesan> chatbot:"
      var prompt = "user: " + message + " chatbot:";

      // Buat tensor dari prompt
      var tensor = tf.tensor2d([prompt], [1, 1]);

      // Generate teks dengan model GPT-2
      var output = await model.executeAsync({
        "input": tensor,
        "numSamples": 1,
        "temperature": 0.7
      });

      // Ambil teks hasil generate dan hapus prompt
      var generatedText = output[0].arraySync()[0][0].replace(prompt, "");

      // Tampilkan teks hasil generate pada halaman
      var chat = document.getElementById("chat");
      chat.innerHTML += "<p>You: " + message + "</p>";
      chat.innerHTML += "<p>ChatGPT: " + generatedText + "</p>";

      // Bersihkan input pesan pada halaman
      document.getElementById("message-input").value = "";
    }

    // Panggil fungsi loadModel saat halaman selesai dimuat
    loadModel();
  </script>
  <div>
    <input type="text" id="message-input" placeholder="Enter your message...">
    <button type="button" onclick="sendMessage(document.getElementById('message-input').value)">Send</button>
  </div>
</body>

</html>