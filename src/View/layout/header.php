<div class="header">
    <div>
        <span class="logo-container">ReddIItE</span>
    </div>
    <ul class="link-header-container">
        <li class="link-header-item">
            <a href="index">Home</a>
        </li>
        <li class="link-header-item">
            <a href="contact">Contact</a>
        </li>
        <li class="link-header-item">
            <a href="about">About</a>
        </li>
    </ul>

    <ul class="link-header-container">
        <?php if (!$authenticatorService->isAuthenticated()): ?>
        <li class="link-header-item">
            <a href="login">Login</a>
        </li>
        <li class="link-header-item">
            <a href="signup">Signup</a>
        </li>
        <?php else: ?>
        <li class="link-header-item">
            Welcome <?= $user->getEmail() ?>
        </li>
        <li class="link-header-item">
            <a href="logout">Logout</a>
        </li>
        <?php endif; ?>
    </ul>
</div>