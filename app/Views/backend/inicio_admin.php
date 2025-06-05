<div style="
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  padding: 60px 40px;
  border-radius: 16px;
  color: white;
  text-align: center;
  box-shadow: 0 8px 25px rgba(37, 117, 252, 0.7);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  max-width: 900px;
  margin: 60px auto;
  position: relative;
  overflow: hidden;
  animation: gradientShift 15s ease infinite;
">

    <!-- Icono SVG engranaje animado -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round"
        style="width: 100px; height: 100px; margin: 0 auto 30px auto; display: block; filter: drop-shadow(0 0 5px rgba(255,255,255,0.7)); animation: spin 8s linear infinite;">
        <circle cx="12" cy="12" r="3"></circle>
        <path
            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09a1.65 1.65 0 0 0-1-1.51 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09a1.65 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33h.09a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51h.09a1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82v.09a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z">
        </path>
    </svg>

    <h2 style="
    font-size: 2.8rem; /* reducido para que no corte */
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 25px;
    padding: 0 10px; /* espacio a los lados */
    text-shadow: 2px 2px 6px rgba(0,0,0,0.3);
  ">
        ¡Bienvenido, Administrador!
    </h2>

    <p style="
    font-size: 1.6rem;
    font-weight: 600;
    max-width: 600px;
    margin: 0 auto;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.2);
  ">
        Has iniciado sesión correctamente. <span style="color: #ffea00;">¡Disfruta tu gestión!</span>
    </p>
</div>

<style>
@keyframes gradientShift {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

div[style*="linear-gradient"] {
    background-size: 200% 200%;
}

@keyframes spin {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}
</style>