<div style="background: linear-gradient(to bottom right, #e0f7fa, #ffffff); 
           padding: 60px 40px; 
           border-radius: 16px; 
           color: #2c3e50; 
           max-width: 800px; 
           margin: 60px auto; 
           box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15); 
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
           text-align: center;
           border: 1px solid #dce3ea;">

    <h2 style="font-size: 2.8rem; font-weight: 700; margin-bottom: 16px; color: #1a1a1a;">
        ¡Hola <?= esc($cliente_nombre) ?>!
        <span style="display: inline-block; animation: wave 2.5s infinite;">👋</span>
        <span>🎉✨</span>
    </h2>

    <p style="font-size: 1.4rem; font-weight: 500; color: #34495e; margin-bottom: 25px;">
        Tu inicio de sesión fue exitoso. <br>Nos alegra tenerte de vuelta en <strong>CODI GAMES</strong>.
    </p>

    <div style="margin-top: 30px;">
        <a href="<?= base_url('productos') ?>" style="text-decoration: none; 
                  background-color: #3498db; 
                  color: white; 
                  padding: 12px 28px; 
                  border-radius: 8px; 
                  font-size: 1.1rem; 
                  font-weight: 600;
                  transition: background-color 0.3s ease;">
            Ir a la tienda
        </a>
    </div>
</div>

<style>
@keyframes wave {
    0% {
        transform: rotate(0deg);
    }

    15% {
        transform: rotate(15deg);
    }

    30% {
        transform: rotate(-10deg);
    }

    40% {
        transform: rotate(15deg);
    }

    50% {
        transform: rotate(-10deg);
    }

    60% {
        transform: rotate(15deg);
    }

    75% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(0deg);
    }
}
</style>