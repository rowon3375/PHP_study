<!-- 회원가입 폼 양식 작성 -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insertForm</title>
  </head>
  <body>
    <form action="insertPro.php" method="post">
      <table border="1">
        <tr>
          <th>아이디</th>
          <td>
            <input type="text" name="id" size="20" placeholder="아이디를입력하세요" required onfocus>
          </td>
        </tr>

        <tr>
          <th>비밀번호</th>
          <td>
            <input type="password" name="pw" size="20" placeholder="6~16글자" required>
          </td>
        </tr>

        <tr>
          <th>이메일</th>
          <td>
            <input type="text" name="email" size="20" placeholder="ex@navear.com" required>
          </td>
        </tr>

        <tr>
          <th>전화번호</th>
          <td>
            <input type="text" name="tel" size="20" placeholder="010-0000-0000">
          </td>
        </tr>

        <tr>
          <td colspan="2" style="text-align:center">
            <input type="submit" value="가입하기">
            <input type="reset" value="재작성하기">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
