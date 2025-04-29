<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #111;
      color: white;
      text-align: center;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #444;
      padding: 15px;
      vertical-align: top;
    }
    th {
      background-color: #222;
    }
    img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }
  </style>

<p class="text-primary mb-2 display-1">Values</p>
<h4 class="text-white">
    Established with a passion for the game <br>
    and a vision for growth, we aim to build a <br>
    community united by a love for volleyball.
</h4>


<!--- History and results of major competitions -->
<!--- This is shown with a table format -->
<h4 class="text-primary mb-2 display-1">History and Results</h4>
<table>
    <tr>
      <td><img src="/images/_temps/Gallery/vvl res 2.jpg" alt="V-League 2018 Winner"></td>
    </tr>
    <tr>
      <td>
        <strong>2024 State League Two Men's Champions</strong>
        <br><br>
        <strong>Winner 1 time:</strong><br>
        2024<br>
        <strong>Runner-up(s):</strong><br>
        2024 State League Three Men
        <br>
        2024 State League Two Women
      </td>
    </tr>
  </table>

<?php
require(__DIR__ . '/../template/footer.temp.php');
?>