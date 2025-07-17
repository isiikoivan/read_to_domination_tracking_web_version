<?php
//$userData=['username'];
$userData=null;
//$isUpdate = isset($userData);
$isUpdate = null;
?>


<div class="form_page">
<div class="register_class">
    <h5> <i class="fa-solid fa-plus"></i> Create Account</h5>

    <div class="row_setup">
        <input type="text" placeholder="Salutation" />

        <input type="text" placeholder="First Name" />
    </div>
    <div class="row_setup">
        <input type="text" placeholder="Last Name" />

        <input type="text" placeholder="Other Name" />
    </div>
    <div class="row_setup">
        <input type="email" placeholder=" Email" />
    <input type="text" placeholder="Phone Number" />
    </div>
    <div class="row_setup">
        <input type="text" placeholder="User Name" />
        <input type="date" placeholder="Date of Birth" />
    </div>
    <div class="row_setup">
        <input type="text" placeholder="Password" />
        <input type="password" placeholder="Confirm Password" />
    </div>
    <div class="row_setup">
        <button><i class="fa-solid fa-floppy-disk  icon_space"></i> Save</button>
        <a class="button_login_link" href="login.html"><i class="fa-solid fa-door-open icon_space"></i> Login</a>
    </div>

    <form method="post" action="index">
        <input type="hidden" name="action" value="<?= $isUpdate ? 'update' : 'register' ?>">

        <?php if ($isUpdate): ?>
        <input type="hidden" name="user_id" value="<?= htmlspecialchars($userData['id']) ?>">
        <?php endif; ?>

        <label>Username:</label>
        <input type="text" name="username" value="<?= htmlspecialchars($userData['username'] ?? '') ?>">

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($userData['email'] ?? '') ?>">

        <button type="submit"><?= $isUpdate ? 'Update' : 'Register' ?></button>
    </form>

</div>
</div>
