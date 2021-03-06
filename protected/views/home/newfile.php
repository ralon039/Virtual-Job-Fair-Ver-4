<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <title>GumWrapper example</title>
</head>
<body>
   <br><br><br> <h1>GumWrapper example</h1>

    <video id="myVideo"></video>

    <script src="/JobFair/images/gumwrapper.js"></script>
    <script>
    (function() {
        function showSuccess(video) {
            alert('Hey, it works! Dimensions: ' + video.videoWidth + ' x ' + video.videoHeight);
        }
        function showError(error) {
            alert('Oops: ' + error.message);
        }
        var gum = new GumWrapper({video: 'myVideo'}, showSuccess, showError);
        gum.play();
    })();
    </script>
</body>
</html>