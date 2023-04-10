<?php 

$a = ""; // Enter Your OpenAI API Key 

?>

var openaiKey = "<?php echo $a; ?>";

function openai_chat() {
  var prompt_text = "Human:"
  var prompt_text2 = document.querySelector('#openaichatquery').value;
  
  var url = "https://api.openai.com/v1/engines/text-davinci-002/completions";
  

  var xhr = new XMLHttpRequest();
  xhr.open("POST", url);

  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.setRequestHeader("Authorization", "Bearer <?php echo $a; ?>");

  xhr.onreadystatechange = function () {
     if (xhr.readyState === 4) {
        console.log(xhr.status);
        console.log(xhr.responseText);
        open_ai_response = xhr.responseText;
        var kk = JSON.parse(open_ai_response);
        var kl = kk.choices[0].text;
        var chat = $('#openaichatresponse').html();
        var xxk = "<div class='openaimessage query'>"+ prompt_text2 +"</div>";
        var xxl = "<div class='openaimessage response'>"+ kl +"</div>";
        var xxx = chat + xxk + xxl;
        $('#openaichatresponse').html(xxx);
     }};

  var data = `{
    "prompt": "${prompt_text + prompt_text2}",
    "temperature": 1,
    "max_tokens": 2048,
    "top_p": 1,
    "frequency_penalty": 0.75,
    "presence_penalty": 0
  }`;

  xhr.send(data);
}


function openai_art(){
const API_ENDPOINT = "https://api.openai.com/v1/images/generations";


const prompt = document.querySelector('#openaiartquery').value;

$.ajax({
  url: API_ENDPOINT,
  type: "POST",
  data: JSON.stringify({
    model: "image-alpha-001",
    prompt: prompt,
    size: "1024x1024",
    response_format: "url"
  }),
  contentType: "application/json",
  headers: {
    "Authorization": `Bearer <?php echo $a; ?>`
  },
  success: function(data) {
        var chat = $('#openaiartresponse').html();
        var xxk = "<div class='openaimessage query'>"+ prompt +"</div>";
        var xxl = "<img class='openaimessage response' style='margin-bottom:21px;padding:0!important;' src='"+ data.data[0].url +"'>";
        var xxx = chat + xxk + xxl;
        $('#openaiartresponse').html(xxx);
  },
  error: function(error) {
    console.log(error);
  }
});

}
