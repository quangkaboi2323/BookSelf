<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>
</head>

<body>
   <form name="info" action="./config.php" method="post">
      <table align="center" bgcolor="white" style="padding: 10px; border: solid 1px black">
         <tr>
            <td colspan="2">
               <h3>Enter your information</h3>
            </td>
         </tr>
         <tr>
            <td>Full Name</td>
            <td><input type="text" name="fullname" required></td>
         </tr>
         <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="" required></td>
         </tr>
         <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" value="" required></td>
         </tr>
         <tr>
            <td>Gender</td>
            <td>
               <input type="radio" name="gender" value="Nam" checked>
               <label for="gender">Nam</label>
               <input type="radio" name="gender" value="Nữ">
               <label for="gender">Nữ</label>
            </td>
         </tr>
         <tr>
            <td>Country</td>
            <td>
               <select name="country">
                  <option value="Việt Nam">Việt Nam</option>
                  <option value="Mỹ">Mỹ</option>
                  <option value="Lào">Lào</option>
                  <option value="Thái Lan">Thái Lan</option>
               </select>
            </td>
         </tr>
         <tr>
            <td>Study</td>
            <td>
               <input type="checkbox" value="PHP & MySQL" name="study[]">
               <label>PHP & MySQL</label>
               <input type="checkbox" value="ASP.NET" name="study[]">
               <label>ASP.NET</label>
               <input type="checkbox" value="CCNA" name="study[]">
               <label>CCNA</label>
               <input type="checkbox" value="Security+" name="study[]">
               <label>Security+</label>
            </td>
         </tr>
         <tr>
            <td>Note</td>
            <td>
               <textarea name="note" id="" cols="30" rows="5" required></textarea>
            </td>
         </tr>
         <tr>
            <td></td>
            <td>
               <input type="submit" value="Gửi">
               <input type="reset" value="Hủy">
            </td>
         </tr>
      </table>
   </form>
</body>

</html>