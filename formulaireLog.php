<div class="fullscreen">
        <div class="formulaire">
            <div class="header">
                   <h1>LOGIN</h1> 
            </div>
            <div class="contenu">
                <form action="verification.php" method="POST">
                    <div class="login-formulaire">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="exemple@gmail.com" required><br>
                        <label for="mdp">Password</label>
                        <input type="password" name="mdp" id="mdp" required>
                    </div>
                    <p><button type="submit">Valider</button></p>
                </form>
            </div>
        </div>
        
    </div>

<?php
    require_once "features/foot.php";
?>