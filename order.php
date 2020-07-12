
<?php
require('../../mainfile.php');
require(XOOPS_ROOT_PATH.'/header.php');
?>

<body>
<form action="mailer.php" method="post" enctype="multipart/form-data" name="" id="order_form">

  <table width="600" align="center" id="len1">
    <tr>
      <td width="340" height="59"><table width="100%"  border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td colspan="4"><div align="center" class="style1 style4">Select Products </div></td>
          </tr>
          <tr>
            <td width="19%" height="25">&nbsp;</td>
            <td width="25%" height="25"><div align="center">Amount</div></td>
            <td width="26%" height="25"><div align="center">Price per Unit </div></td>
            <td width="30%" height="25">&nbsp;</td>
          </tr>
          <tr>
            <td>item 1 </td>
            <td><div align="center">
                <input name="item1" type="text" id="dvd2" size="2" maxlength="2">
            </div></td>
            <td><div align="center">10&euro;</div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>item 2 </td>
            <td><div align="center">
                <input name="item2" type="text" id="vhs2" size="2" maxlength="2">
            </div></td>
            <td><div align="center">15&euro;</div></td>
            <td><div align="center">Size</div></td>
          </tr>
          <tr>
            <td>item 3 </td>
            <td><div align="center">
                <input name="item3" type="text" id="tshirt2" size="2" maxlength="2">
            </div></td>
            <td><div align="center">15&euro;</div></td>
            <td><div align="center">
                <input name="size" type="text" id="Tamanho2" size="3" maxlength="3">
            </div></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Personal Data </td>
    </tr>
    <tr>
      <td><div align="right">Name:</div></td>
      <td width="248"><input name="s_name" type=text id="nome2" size="25" maxlength="25">
          <span class="style5"> *</span></td>
    </tr>
    <tr>
      <td><div align="right">Address:</div></td>
      <td><input name="address" type=text id="morada2" size="25" maxlength="25">
          <span class="style5">*</span></td>
    </tr>
    <tr>
      <td><div align="right">Zip Code :</div></td>
      <td><input name="zip_code" type="text" id="cod_postal2" size="25" maxlength="25">
          <span class="style5">*</span></td>
    </tr>
    <tr>
      <td><div align="right">Telefone:</div></td>
      <td><input name="telefone" type="text" id="telefone2" size="25" maxlength="25">
          <span class="style5">*</span></td>
    </tr>
    <tr>
      <td><div align="right">Email:</div></td>
      <td><input name="email" type="text" id="email2" size="25" maxlength="25">
          <span class="style5">*</span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input name="submit" type="submit" value="Send">
          <input name="reset" type="reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
</body>

<?php
require(XOOPS_ROOT_PATH.'/footer.php');
?>
