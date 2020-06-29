{include 'header.tpl'}
    <div class="divformLogin">
        <form method="POST" action="verify" class="formlogin">
            <input type='username' name='username' placeholder = 'Usuario'>
            <input type='email' name='email' placeholder = 'E-mail'>
            <input type="password" name='password' placeholder = 'Contraseña'>
        
            {if $error}
                <div class="error">
                    {$error}
                </div>
            {/if}
            <button type='submit'>Ingresar</button>
        </form>
        <a href='registration'>No eres usuario? Registrate!</a>
    </div>
{include 'footer.tpl'}