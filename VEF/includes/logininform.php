<form method="post" action="logreg.php">
    <label>Innskrá og Skráning</label>
    <input type="text" name="username" value="" placeholder="username" required pattern="{5}" title="Notendanafn, minnst fimm stafir">
    <input type="password" name="password" value="" placeholder="password" required title="Lykilorð">
	<input type="submit" name="login" value="Login">
	<input type="submit" name="register" value="Register">
</form>

<!--<fieldset>
           	<input type="text" name="username" placeholder="Notendanafn" required pattern="{5}" title="Notendanafn, minnst fimm stafir">
        	<input type="password" name="password" placeholder="Lykilorð" required title="Lykilorð">
</fieldset>
<button type="submit"  class="pure-button pure-input-1 pure-button-primary">Skrá inn</button>