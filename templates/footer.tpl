        <footer>
            <img src="{$base_url}img/profile/logo.png">
            <form method="post" action="admin.view.php" class="login-outlogin">
                {if $esAdmin}
                    <a href="logout">Logout</a>
                {else}
                    <a href="login">Login</a>
                {/if}
            </form>
        </footer>    
    </body>
</html>
