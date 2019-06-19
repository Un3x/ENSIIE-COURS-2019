<form action="addUser.php" method="post">
  <div>
    <label>Email :</label>
    <input type="text" name="email" />
    <?php if (isset($data['userAlreadyExist'])): ?>
      <span class="error-message"><?= $data['userAlreadyExist'] ?></span>
    <?php endif; ?>
  </div>
  <div>
    <label>password :</label>
    <input type="password" name="password" />
  </div>
  <div>
    <label>Password verify :</label>
    <input type="password" name="password_verify" />
    <?php if (isset($data['passwordDoesNotMatch'])): ?>
      <span class="error-message"><?= $data['passwordDoesNotMatch'] ?></span>
    <?php endif; ?>
  </div>
  <button type="submit">Valider</button>
</form>