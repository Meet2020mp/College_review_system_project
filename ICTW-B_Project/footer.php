<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <style>
      body{ height:100vh; margin:0; }

      /* header{ min-height:50px; background:lightcyan; } */
      footer{ min-height:35px; background:PapayaWhip; }

      /* Trick */
      body{ 
        display:flex; 
        flex-direction:column; 
      }

      footer{
        margin-top:auto; 
        background-color:darkgray;
        text-align: center;
        align-self:center;
        justify-content:center;
        padding-top:21px;
        width:100%;
        font-size:16px;
        margin-left :0;
        margin-left:-30px;
        margin-right:-30px;
      }
    /* .footer {
         clear: both;
        position: relative;
        height: 20px;
         margin-top: -20px; 
        position: absolute;
        bottom: 0;
        padding: 20px;
        text-align: center;
        background-color:darkgray;
        height: 20px;
        margin-top: -20px;
        position: sticky;
        clear: both;
        margin-bottom:-20px;
        font-size:11px;
        width: 100%;
        bottom:0px;
        } */
        footer:hover {
          background-color: #212725;
          color: #ffffff;
          text-align: center;
          /* font-size: 16px; */
          /* padding: 12px; */
        }
    </style>
</head>
<body>
    
</body>

<!-- <div class="footer"> -->
  <footer contentEditable>Copyright &copy; 2020-21 | Gujarat Universities!</footer>
<!-- </div> -->
</html>