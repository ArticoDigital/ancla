<?php
get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

  <section class="cover bg-img">
    <div id="map"></div>
  </section>

  <section>

    <div class="red-section-header">
      <div class="container">
        <h3><?php the_title(); ?><span><img
              src="<?php echo get_template_directory_uri(); ?>/img/mini_icono_contacto.png"></span></h3>
      </div>
    </div>

    <div class="container products-container Contact">
      <div class="row">
        <div class="col-xs-12 col-md-6 clearfix">
			<?php

			the_content();

			?>
        </div>
        <div class="col-xs-12 col-md-6 clearfix">

          <div class="contact-data">
            <h3>Contáctenos</h3>
            <ul>

              <li>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<g>
  <g>
    <g>
      <path fill="#A11E27" d="M19.552,15.806l-3.088-3.089c-0.616-0.613-1.635-0.595-2.271,0.042l-1.556,1.557
				c-0.099-0.055-0.201-0.111-0.308-0.172c-0.983-0.544-2.328-1.29-3.742-2.706c-1.42-1.419-2.167-2.766-2.713-3.75
				c-0.058-0.104-0.113-0.205-0.167-0.3l1.044-1.042l0.513-0.514C7.902,5.193,7.919,4.175,7.305,3.56L4.217,0.47
				C3.603-0.143,2.584-0.125,1.946,0.513l-0.87,0.876L1.1,1.413C0.808,1.785,0.563,2.214,0.383,2.678
				C0.215,3.119,0.111,3.54,0.063,3.961c-0.408,3.381,1.137,6.471,5.33,10.664c5.796,5.796,10.467,5.358,10.669,5.337
				c0.438-0.053,0.858-0.157,1.286-0.323c0.46-0.18,0.889-0.424,1.261-0.715l0.02,0.017l0.882-0.863
				C20.146,17.44,20.165,16.421,19.552,15.806z"/>
    </g>
  </g>
</g>
</svg>

                <b> PBX:</b> <a
                  href="tel:(+571) 3116211">(+571) 3116211 </a></li>
              <li>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<g>
  <path fill="#A11E27" d="M16.419,12.289h-2.341l0.995-1.439c1.882-2.508,1.609-6.631-0.582-8.822
		c-1.184-1.184-2.759-1.836-4.434-1.836c-1.674,0-3.249,0.652-4.434,1.836C3.433,4.219,3.16,8.342,5.034,10.84l1.003,1.449H3.581
		L0,19.809h20L16.419,12.289z M10.116,4.114c1.261,0,2.289,1.027,2.289,2.289c0,1.262-1.027,2.289-2.289,2.289
		c-1.262,0-2.289-1.027-2.289-2.289C7.827,5.141,8.854,4.114,10.116,4.114z M3.994,12.941H6.49l3.567,5.154l3.567-5.154h2.381
		l2.958,6.213H1.036L3.994,12.941z"/>
</g>
</svg>

                <b> Dirección: </b>Carrera 68h #
                73a - 29, Bogotá Colombia
              </li>
              <li>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<g>
  <g id="Layer_2_19_">
    <g>
      <path fill="#A11E27" d="M19.197,6.681c-0.154-0.408-0.611-0.614-1.02-0.459c-0.408,0.154-0.614,0.611-0.459,1.02
				c0.76,2.007,0.712,4.199-0.135,6.172c-0.868,2.025-2.474,3.592-4.521,4.41c-2.047,0.817-4.29,0.79-6.315-0.079
				c-0.587-0.251-1.136-0.565-1.639-0.934c-1.232-0.902-2.19-2.134-2.771-3.587c-0.818-2.047-0.79-4.289,0.079-6.315
				c0.869-2.025,2.475-3.592,4.521-4.41c1.958-0.783,4.096-0.789,6.051-0.027l-0.56,0.946c-0.154,0.26-0.036,0.434,0.262,0.385
				l2.663-0.43c0.298-0.048,0.459-0.321,0.358-0.605L14.81,0.227c-0.102-0.284-0.31-0.305-0.464-0.045l-0.54,0.913
				c-2.396-1.006-5.04-1.03-7.455-0.064C3.912,2.005,1.999,3.872,0.963,6.286c-1.035,2.414-1.068,5.086-0.093,7.525
				c0.692,1.732,1.834,3.199,3.303,4.274c0.599,0.439,1.252,0.813,1.952,1.113c2.414,1.035,5.087,1.068,7.525,0.094
				c2.439-0.975,4.353-2.842,5.388-5.256C20.046,11.686,20.103,9.073,19.197,6.681z"/>
      <path fill="#A11E27" d="M9.653,3.847c-0.353,0-0.64,0.287-0.64,0.64v6.379l5.835,3.016c0.094,0.049,0.194,0.072,0.293,0.071
				c0.231,0,0.455-0.126,0.569-0.346c0.162-0.314,0.039-0.7-0.275-0.863l-5.141-2.657v-5.6C10.293,4.134,10.007,3.847,9.653,3.847z"
      />
    </g>
  </g>
</g>
</svg>

                <b> Horario: </b>Lunes a viernes
                8:00 a.m. a 6:00 pm. 
              </li>
              <h3>Escríbanos</h3>

              <li>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="30px" height="20px" viewBox="0 0 30 20" enable-background="new 0 0 30 20" xml:space="preserve">
<g>
  <polygon fill="#A11E27" points="18.489,15.111 9.392,7.122 27.587,7.122 	"/>
  <polygon fill="#A11E27" points="14.865,13.381 8.489,18.98 8.489,7.781 	"/>
  <polygon fill="#A11E27" points="15.691,14.106 18.489,16.563 21.287,14.106 27.593,19.645 9.386,19.645 	"/>
  <polygon fill="#A11E27" points="22.113,13.381 28.489,7.781 28.489,18.98 	"/>
</g>
                  <g>
                    <path fill="#A11E27" d="M6.489,9.737c-2.427,0-4.401-1.975-4.401-4.402s1.975-4.402,4.401-4.402c2.428,0,4.402,1.975,4.402,4.402
		c0,0.637-0.143,1.24-0.387,1.787h0.62c0.216-0.557,0.346-1.156,0.346-1.787c0-2.746-2.234-4.979-4.98-4.979
		c-2.745,0-4.979,2.233-4.979,4.979s2.233,4.98,4.979,4.98c0.712,0,1.387-0.156,2-0.426V9.234C7.886,9.545,7.213,9.737,6.489,9.737z
		"/>
                  </g>
                  <g>
                    <g>
                      <path fill="#A11E27" d="M8.482,3.184C7.95,2.652,7.243,2.358,6.49,2.358S5.03,2.652,4.498,3.184
			C3.471,4.211,3.396,5.852,4.312,6.963C4.185,7.222,4.036,7.394,3.868,7.477C3.765,7.528,3.707,7.639,3.724,7.752
			c0.018,0.114,0.105,0.203,0.219,0.221c0.063,0.009,0.13,0.016,0.2,0.016l0,0c0.346,0,0.709-0.12,1.013-0.328
			C5.563,7.879,6.022,7.995,6.49,7.995c0.753,0,1.46-0.293,1.992-0.824C9.015,6.637,9.308,5.93,9.308,5.178S9.015,3.716,8.482,3.184
			z M8.257,6.943c-0.472,0.472-1.1,0.732-1.767,0.732c-0.446,0-0.884-0.12-1.265-0.344C5.2,7.317,5.172,7.309,5.145,7.309
			c-0.034,0-0.07,0.012-0.098,0.033c-0.361,0.28-0.725,0.321-0.884,0.324C4.353,7.525,4.512,7.306,4.645,7
			C4.67,6.943,4.66,6.877,4.618,6.83C3.745,5.843,3.791,4.339,4.723,3.407c0.472-0.472,1.1-0.731,1.767-0.731
			s1.294,0.259,1.767,0.731C9.232,4.383,9.232,5.969,8.257,6.943z"/>
                      <path fill="#A11E27" d="M7.67,4.246H5.31c-0.089,0-0.16,0.071-0.16,0.16c0,0.088,0.071,0.159,0.16,0.159h2.36
			c0.088,0,0.16-0.071,0.16-0.159C7.83,4.317,7.758,4.246,7.67,4.246z"/>
                      <path fill="#A11E27" d="M7.67,5.017H5.31c-0.089,0-0.16,0.071-0.16,0.159c0,0.089,0.071,0.159,0.16,0.159h2.36
			c0.088,0,0.16-0.07,0.16-0.159C7.83,5.088,7.758,5.017,7.67,5.017z"/>
                      <path fill="#A11E27" d="M6.67,5.788H5.31c-0.089,0-0.16,0.071-0.16,0.159c0,0.089,0.071,0.16,0.16,0.16h1.36
			c0.088,0,0.16-0.071,0.16-0.16C6.83,5.858,6.758,5.788,6.67,5.788z"/>
                    </g>
                  </g>
</svg>

                <b> Información
                  general:</b> <a href="mailto:">info@ancla.la</a></li>
              <li>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="30px" height="20px" viewBox="0 0 30 20" enable-background="new 0 0 30 20" xml:space="preserve">
<g>
  <polygon fill="#A11E27" points="18.489,15.111 9.392,7.122 27.587,7.122 	"/>
  <polygon fill="#A11E27" points="14.865,13.381 8.489,18.98 8.489,7.781 	"/>
  <polygon fill="#A11E27" points="15.691,14.106 18.489,16.563 21.287,14.106 27.593,19.645 9.386,19.645 	"/>
  <polygon fill="#A11E27" points="22.113,13.381 28.489,7.781 28.489,18.98 	"/>
</g>
                  <g>
                    <path fill="#A11E27" d="M6.489,9.737c-2.427,0-4.401-1.975-4.401-4.402s1.975-4.402,4.401-4.402c2.428,0,4.402,1.975,4.402,4.402
		c0,0.637-0.143,1.24-0.387,1.787h0.62c0.216-0.557,0.346-1.156,0.346-1.787c0-2.746-2.234-4.979-4.98-4.979
		c-2.745,0-4.979,2.233-4.979,4.979s2.233,4.98,4.979,4.98c0.712,0,1.387-0.156,2-0.426V9.234C7.886,9.545,7.213,9.737,6.489,9.737z
		"/>
                  </g>
                  <g>
                    <path fill="#A11E27" d="M10.17,4.114L8.609,2.553C8.511,2.455,8.379,2.4,8.239,2.4s-0.271,0.055-0.37,0.153L7.503,2.92
		C7.446,2.977,7.406,3.043,7.381,3.113L5.665,2.807c0,0,0,0,0-0.001C4.893,2.653,4.139,3.154,3.983,3.927L3.904,4.319
		C3.817,4.753,4.099,5.177,4.532,5.264C4.966,5.352,5.39,5.07,5.477,4.636l0.048-0.24l0.77,0.067l2.01,2.01l0.364,0.364
		c0.074,0.074,0.074,0.194,0,0.268c-0.073,0.074-0.193,0.074-0.268,0L7.426,6.129c-0.068-0.067-0.178-0.067-0.246,0
		c-0.068,0.068-0.068,0.179,0,0.246l0.976,0.976c0.036,0.036,0.056,0.084,0.056,0.134c0,0.051-0.02,0.099-0.056,0.134
		c-0.074,0.074-0.193,0.074-0.268,0L6.912,6.643c-0.067-0.068-0.178-0.068-0.246,0c-0.067,0.068-0.067,0.179,0,0.246l0.976,0.976
		c0.074,0.074,0.074,0.194,0,0.268C7.606,8.168,7.559,8.188,7.508,8.188c-0.05,0-0.098-0.02-0.134-0.056L6.398,7.156
		c-0.068-0.067-0.178-0.067-0.246,0c-0.068,0.068-0.068,0.179,0,0.246l0.976,0.976c0.074,0.074,0.074,0.194,0,0.268
		c-0.073,0.074-0.193,0.074-0.268,0L3.408,5.193L2.953,4.737c-0.068-0.067-0.178-0.067-0.247,0c-0.068,0.068-0.068,0.179,0,0.246
		l0.456,0.456l0.496,0.496L3.385,6.209c-0.089,0.09-0.139,0.209-0.139,0.336c0,0.126,0.049,0.245,0.139,0.335l0.089,0.089
		c0.078,0.078,0.179,0.126,0.288,0.137c0.01,0.109,0.058,0.21,0.136,0.288l0.089,0.089C4.068,7.563,4.17,7.608,4.275,7.619
		c0.011,0.108,0.059,0.21,0.137,0.288l0.089,0.089C4.58,8.074,4.681,8.122,4.789,8.133C4.8,8.242,4.848,8.343,4.926,8.421
		L5.015,8.51c0.092,0.093,0.214,0.139,0.335,0.139c0.121,0,0.243-0.046,0.335-0.139l0.273-0.273l0.655,0.655
		C6.716,8.993,6.851,9.05,6.994,9.05s0.278-0.057,0.38-0.158C7.471,8.796,7.525,8.67,7.53,8.535
		c0.136-0.006,0.262-0.061,0.357-0.157c0.1-0.099,0.151-0.228,0.156-0.357c0.13-0.005,0.259-0.057,0.357-0.156
		c0.1-0.099,0.151-0.228,0.156-0.357c0.13-0.005,0.259-0.057,0.357-0.156c0.21-0.209,0.21-0.55,0-0.76L8.674,6.35l0.883-0.882
		l0.613-0.614C10.374,4.65,10.374,4.318,10.17,4.114z M3.631,6.634c-0.049-0.049-0.049-0.129,0-0.179l0.256-0.256l0.268,0.267
		L3.898,6.723c-0.049,0.05-0.129,0.05-0.178,0L3.631,6.634z M4.145,7.147c-0.049-0.049-0.049-0.129,0-0.179l0.256-0.256L4.668,6.98
		L4.412,7.236c-0.049,0.05-0.129,0.05-0.178,0L4.145,7.147z M4.658,7.661C4.634,7.638,4.622,7.605,4.622,7.572
		c0-0.034,0.013-0.065,0.037-0.09l0.256-0.256l0.268,0.267L4.926,7.75c-0.049,0.05-0.129,0.05-0.178,0L4.658,7.661L4.658,7.661z
		 M5.439,8.264c-0.049,0.05-0.129,0.05-0.178,0L5.172,8.175c-0.049-0.049-0.049-0.13,0-0.179L5.428,7.74l0.268,0.268L5.439,8.264z
		 M8.428,6.104L6.496,4.172C6.468,4.144,6.43,4.126,6.388,4.122L5.401,4.036c-0.005-0.001-0.01-0.001-0.016-0.001
		c-0.082,0-0.154,0.058-0.17,0.14L5.136,4.567C5.086,4.813,4.847,4.973,4.601,4.923C4.482,4.898,4.379,4.83,4.313,4.729
		C4.245,4.628,4.222,4.507,4.246,4.388l0.079-0.393C4.442,3.41,5.014,3.03,5.6,3.148c0.001,0,0.002,0,0.003,0l1.691,0.303
		L7.503,3.66l1.685,1.685L8.428,6.104z M9.924,4.607l-0.49,0.491L7.749,3.414C7.716,3.381,7.697,3.337,7.697,3.29
		s0.019-0.091,0.052-0.124l0.366-0.367c0.033-0.032,0.077-0.051,0.124-0.051S8.33,2.767,8.363,2.799L9.924,4.36
		c0.033,0.033,0.052,0.077,0.052,0.124C9.976,4.53,9.957,4.575,9.924,4.607z"/>
                    <circle fill="#A11E27" cx="9.503" cy="4.553" r="0.174"/>
                  </g>
</svg>
                <b> Información
                  ventas:</b> <a href="mailto:"><a href="mailto:info@ancla.la">info@ancla.la</a>
              </li>
              <li>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="30px" height="20px" viewBox="0 0 30 20" enable-background="new 0 0 30 20" xml:space="preserve">
<g>
  <polygon fill="#A11E27" points="18.489,15.111 9.392,7.122 27.587,7.122 	"/>
  <polygon fill="#A11E27" points="14.865,13.381 8.489,18.98 8.489,7.781 	"/>
  <polygon fill="#A11E27" points="15.691,14.106 18.489,16.563 21.287,14.106 27.593,19.645 9.386,19.645 	"/>
  <polygon fill="#A11E27" points="22.113,13.381 28.489,7.781 28.489,18.98 	"/>
</g>
                  <g>
                    <path fill="#A11E27" d="M6.489,9.737c-2.427,0-4.401-1.975-4.401-4.402s1.975-4.402,4.401-4.402c2.428,0,4.402,1.975,4.402,4.402
		c0,0.637-0.143,1.24-0.387,1.787h0.62c0.216-0.557,0.346-1.156,0.346-1.787c0-2.746-2.234-4.979-4.98-4.979
		c-2.745,0-4.979,2.233-4.979,4.979s2.233,4.98,4.979,4.98c0.712,0,1.387-0.156,2-0.426V9.234C7.886,9.545,7.213,9.737,6.489,9.737z
		"/>
                  </g>
                  <g>
                    <g>
                      <path fill="#A11E27" d="M8.482,3.184C7.95,2.652,7.243,2.358,6.49,2.358S5.03,2.652,4.498,3.184
			C3.471,4.211,3.396,5.852,4.312,6.963C4.185,7.222,4.036,7.394,3.868,7.477C3.765,7.528,3.707,7.639,3.724,7.752
			c0.018,0.114,0.105,0.203,0.219,0.221c0.063,0.009,0.13,0.016,0.2,0.016l0,0c0.346,0,0.709-0.12,1.013-0.328
			C5.563,7.879,6.022,7.995,6.49,7.995c0.753,0,1.46-0.293,1.992-0.824C9.015,6.637,9.308,5.93,9.308,5.178S9.015,3.716,8.482,3.184
			z M8.257,6.943c-0.472,0.472-1.1,0.732-1.767,0.732c-0.446,0-0.884-0.12-1.265-0.344C5.2,7.317,5.172,7.309,5.145,7.309
			c-0.034,0-0.07,0.012-0.098,0.033c-0.361,0.28-0.725,0.321-0.884,0.324C4.353,7.525,4.512,7.306,4.645,7
			C4.67,6.943,4.66,6.877,4.618,6.83C3.745,5.843,3.791,4.339,4.723,3.407c0.472-0.472,1.1-0.731,1.767-0.731
			s1.294,0.259,1.767,0.731C9.232,4.383,9.232,5.969,8.257,6.943z"/>
                      <path fill="#A11E27" d="M7.67,4.246H5.31c-0.089,0-0.16,0.071-0.16,0.16c0,0.088,0.071,0.159,0.16,0.159h2.36
			c0.088,0,0.16-0.071,0.16-0.159C7.83,4.317,7.758,4.246,7.67,4.246z"/>
                      <path fill="#A11E27" d="M7.67,5.017H5.31c-0.089,0-0.16,0.071-0.16,0.159c0,0.089,0.071,0.159,0.16,0.159h2.36
			c0.088,0,0.16-0.07,0.16-0.159C7.83,5.088,7.758,5.017,7.67,5.017z"/>
                      <path fill="#A11E27" d="M6.67,5.788H5.31c-0.089,0-0.16,0.071-0.16,0.159c0,0.089,0.071,0.16,0.16,0.16h1.36
			c0.088,0,0.16-0.071,0.16-0.16C6.83,5.858,6.758,5.788,6.67,5.788z"/>
                    </g>
                  </g>
</svg>

                <b> Servicios:</b> <a
                  href="mailto:info@ancla.la ">info@ancla.la</a></li>
              <li>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="30px" height="20px" viewBox="0 0 30 20" enable-background="new 0 0 30 20" xml:space="preserve">
<g>
  <polygon fill="#A11E27" points="18.489,15.111 9.392,7.122 27.587,7.122 	"/>
  <polygon fill="#A11E27" points="14.865,13.381 8.489,18.98 8.489,7.781 	"/>
  <polygon fill="#A11E27" points="15.691,14.106 18.489,16.563 21.287,14.106 27.593,19.645 9.386,19.645 	"/>
  <polygon fill="#A11E27" points="22.113,13.381 28.489,7.781 28.489,18.98 	"/>
</g>
                  <g>
                    <path fill="#A11E27" d="M6.489,9.737c-2.427,0-4.401-1.975-4.401-4.402s1.975-4.402,4.401-4.402c2.428,0,4.402,1.975,4.402,4.402
		c0,0.637-0.143,1.24-0.387,1.787h0.62c0.216-0.557,0.346-1.156,0.346-1.787c0-2.746-2.234-4.979-4.98-4.979
		c-2.745,0-4.979,2.233-4.979,4.979s2.233,4.98,4.979,4.98c0.712,0,1.387-0.156,2-0.426V9.234C7.886,9.545,7.213,9.737,6.489,9.737z
		"/>
                  </g>
                  <g>
                    <g>
                      <path fill="#A11E27" d="M7.362,6.215V6.109c0.03-0.024,0.059-0.05,0.086-0.079c0.222-0.244,0.362-0.552,0.399-0.879
			c0.199-0.03,0.379-0.137,0.501-0.298c0.167-0.236,0.182-0.577,0.042-1.004c-0.008-0.024-0.024-0.046-0.046-0.06L8.283,3.746
			c0.009-0.385-0.124-0.761-0.375-1.054C7.598,2.342,7.121,2.166,6.49,2.163c-0.63,0-1.108,0.179-1.419,0.524
			C4.821,2.98,4.688,3.356,4.697,3.742L4.633,3.784C4.612,3.798,4.595,3.82,4.587,3.844c-0.14,0.43-0.125,0.768,0.043,1.004
			C4.751,5.01,4.931,5.118,5.131,5.15c0.038,0.328,0.178,0.636,0.401,0.88c0.027,0.028,0.056,0.054,0.086,0.079v0.106
			c-0.442,0.085-2.208,0.5-2.177,1.678c0,0.063,0.052,0.115,0.115,0.115h5.868c0.064,0,0.115-0.052,0.115-0.115
			C9.569,6.715,7.804,6.301,7.362,6.215z M5.062,4.892C4.963,4.859,4.878,4.797,4.817,4.713l0.005,0.001
			C4.707,4.546,4.697,4.291,4.8,3.954l0.084-0.057C4.919,3.874,4.939,3.833,4.935,3.79c-0.02-0.345,0.093-0.685,0.314-0.95
			C5.51,2.544,5.929,2.396,6.49,2.394c0.561-0.002,0.98,0.15,1.246,0.446c0.221,0.265,0.333,0.605,0.314,0.95
			C8.045,3.833,8.064,3.874,8.1,3.897l0.084,0.057C8.287,4.29,8.28,4.546,8.162,4.715C8.1,4.798,8.014,4.861,7.916,4.894
			c0.139-0.159,0.208-0.367,0.188-0.577C8.082,4.19,8.016,4.075,7.918,3.993C7.868,2.839,7.059,2.709,6.71,2.709
			c-0.074,0-0.148,0.005-0.221,0.016C6.417,2.715,6.343,2.709,6.27,2.709c-0.347,0-1.155,0.126-1.208,1.284
			C4.963,4.075,4.896,4.188,4.873,4.315C4.854,4.525,4.922,4.734,5.062,4.892z M7.688,3.946C7.204,3.974,6.722,3.853,6.308,3.6
			c-0.047-0.033-0.11-0.027-0.15,0.015C5.927,3.863,5.506,3.92,5.303,3.933c0.063-0.816,0.557-0.994,0.972-0.994
			c0.066,0,0.132,0.005,0.197,0.016c0.016,0.003,0.031,0.003,0.046,0C6.583,2.944,6.65,2.938,6.716,2.939
			c0.412,0,0.909,0.183,0.966,1.005L7.688,3.946z M5.343,4.914l0.005,0.001c0-0.029-0.01-0.056-0.029-0.078
			C5.161,4.657,5.088,4.492,5.108,4.355C5.117,4.28,5.155,4.21,5.213,4.16c0.152,0,0.692-0.028,1.039-0.328
			c0.39,0.224,0.832,0.343,1.281,0.347c0.077,0,0.156,0,0.238-0.013c0.057,0.048,0.093,0.115,0.104,0.189
			c0.02,0.134-0.053,0.301-0.211,0.482C7.645,4.859,7.635,4.887,7.635,4.916c0,0,0,0.023,0,0.06l-0.672,0.36
			C6.83,5.209,6.619,5.215,6.493,5.349c-0.126,0.133-0.12,0.344,0.013,0.47c0.133,0.126,0.344,0.12,0.47-0.013
			c0.059-0.062,0.09-0.144,0.09-0.229c0.001-0.01,0.001-0.021,0-0.031l0.53-0.284C7.551,5.489,7.444,5.7,7.288,5.872
			c-0.205,0.197-0.482,0.3-0.766,0.286H6.464C6.181,6.171,5.905,6.069,5.7,5.873C5.335,5.509,5.343,4.92,5.343,4.914z M6.836,5.577
			c0,0.057-0.046,0.103-0.103,0.103c-0.056,0-0.103-0.046-0.103-0.103c0-0.056,0.046-0.103,0.103-0.103
			C6.79,5.474,6.836,5.521,6.836,5.577z M6.374,7.771H3.675c0.092-0.867,1.501-1.229,1.942-1.323v0.207
			c0,0.262,0.319,0.461,0.757,0.495V7.771z M5.848,6.654V6.651V6.256C6.04,6.345,6.249,6.389,6.461,6.385h0.057
			C6.73,6.389,6.939,6.345,7.131,6.256v0.398c0,0.109-0.25,0.268-0.642,0.268C6.098,6.922,5.848,6.764,5.848,6.654z M6.605,7.773
			V7.148c0.439-0.03,0.757-0.231,0.757-0.496V6.451c0.445,0.093,1.847,0.455,1.942,1.323H6.605z"/>
                    </g>
                  </g>
</svg>
                <b> Atención al
                  cliente:</b> <a
                  href="mailto:info@ancla.la ">info@ancla.la</a>
              </li>
              <li>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="30px" height="20px" viewBox="0 0 30 20" enable-background="new 0 0 30 20" xml:space="preserve">
<g>
  <path fill="#A11E27" d="M8.032,8.248L7.929,8.673c-0.312,0.123-0.56,0.216-0.745,0.281C6.997,9.019,6.783,9.05,6.537,9.05
		c-0.377,0-0.671-0.093-0.88-0.275C5.448,8.59,5.344,8.356,5.344,8.073c0-0.109,0.007-0.223,0.023-0.337
		c0.016-0.115,0.041-0.245,0.075-0.39l0.39-1.377C5.867,5.837,5.896,5.712,5.92,5.594c0.023-0.117,0.035-0.226,0.035-0.323
		c0-0.176-0.036-0.299-0.109-0.368C5.773,4.834,5.635,4.799,5.43,4.799c-0.101,0-0.204,0.017-0.31,0.047
		c-0.105,0.032-0.196,0.063-0.272,0.09l0.104-0.425c0.255-0.104,0.499-0.192,0.731-0.266c0.233-0.074,0.454-0.111,0.662-0.111
		c0.375,0,0.663,0.09,0.866,0.271C7.415,4.586,7.517,4.821,7.517,5.11c0,0.06-0.007,0.165-0.021,0.316
		c-0.014,0.15-0.04,0.289-0.078,0.415L7.03,7.214C6.997,7.324,6.97,7.45,6.944,7.592c-0.025,0.141-0.037,0.249-0.037,0.32
		c0,0.183,0.04,0.307,0.121,0.373c0.083,0.066,0.224,0.1,0.425,0.1c0.094,0,0.201-0.017,0.32-0.05
		C7.892,8.303,7.979,8.273,8.032,8.248z M8.131,2.487c0,0.239-0.09,0.443-0.271,0.611C7.68,3.267,7.461,3.352,7.206,3.352
		c-0.254,0-0.473-0.085-0.655-0.253S6.277,2.727,6.277,2.487s0.091-0.443,0.273-0.613C6.733,1.705,6.952,1.62,7.206,1.62
		c0.255,0,0.474,0.085,0.653,0.254C8.041,2.044,8.131,2.248,8.131,2.487z"/>
</g>
                  <g>
                    <polygon fill="#A11E27" points="18.489,15.111 9.392,7.122 27.587,7.122 	"/>
                    <polygon fill="#A11E27" points="14.865,13.381 8.489,18.98 8.489,7.781 	"/>
                    <polygon fill="#A11E27" points="15.691,14.106 18.489,16.563 21.287,14.106 27.593,19.645 9.386,19.645 	"/>
                    <polygon fill="#A11E27" points="22.113,13.381 28.489,7.781 28.489,18.98 	"/>
                  </g>
                  <g>
                    <path fill="#A11E27" d="M6.489,9.737c-2.427,0-4.401-1.975-4.401-4.402s1.975-4.402,4.401-4.402c2.428,0,4.402,1.975,4.402,4.402
		c0,0.637-0.143,1.24-0.387,1.787h0.62c0.216-0.557,0.346-1.156,0.346-1.787c0-2.746-2.234-4.979-4.98-4.979
		c-2.745,0-4.979,2.233-4.979,4.979s2.233,4.98,4.979,4.98c0.712,0,1.387-0.156,2-0.426V9.234C7.886,9.545,7.213,9.737,6.489,9.737z
		"/>
                  </g>
</svg>
                <b>Mercadeo: </b> <a
                  href="mailto:info@ancla.la">info@ancla.la</a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </div>

  </section>

	<?php

	$lat_long = CFS()->get( 'lat_long' );
	$coords   = explode( ",", $lat_long );

	?>

  <script>
    function initMap() {

      var myLatLng = {lat: <?php echo $coords[0]; ?>, lng: <?php echo $coords[1]; ?>};

      var contentString = '<div id="content">' +
        '<h3 id="firstHeading" class="firstHeading"><?php echo get_bloginfo( 'name', 'display' ) ?></h3>' +
        '<div id="bodyContent">' +
        'Dirección: <?php echo get_theme_mod( 'address' ) ?> </br>' +
        'Teléfono: <?php echo get_theme_mod( 'contact_phone' ) ?> </br>' +
        'Email: <?php echo get_theme_mod( 'contact_email' ) ?> </br>' +
        '</div>' +
        '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });

      // Create a map object and specify the DOM element for display.
      var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 15,
        styles: [
          {
            "featureType": "administrative.locality",
            "elementType": "labels",
            "stylers": [
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "administrative.neighborhood",
            "elementType": "labels.text",
            "stylers": [
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "geometry",
            "stylers": [
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "landscape.man_made",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "landscape.man_made",
            "elementType": "geometry",
            "stylers": [
              {
                "lightness": "30"
              }
            ]
          },
          {
            "featureType": "landscape.man_made",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "landscape.man_made",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "landscape.natural.landcover",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "poi.attraction",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.business",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.government",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.medical",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "hue": "#ff0000"
              },
              {
                "gamma": "4.45"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.place_of_worship",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.place_of_worship",
            "elementType": "labels",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.school",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.sports_complex",
            "elementType": "all",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "hue": "#ff0000"
              },
              {
                "gamma": "1.5"
              },
              {
                "lightness": "34"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels",
            "stylers": [
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "road.highway.controlled_access",
            "elementType": "labels",
            "stylers": [
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "all",
            "stylers": [
              {
                "gamma": "0.50"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
              {
                "visibility": "on"
              },
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
              {
                "visibility": "on"
              },
              {
                "hue": "#ff0000"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels",
            "stylers": [
              {
                "hue": "#ff0000"
              },
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "labels",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#df464a"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "transit.station.bus",
            "elementType": "geometry",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "transit.station.bus",
            "elementType": "labels.text",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "transit.station.bus",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "transit.station.bus",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          },
          {
            "featureType": "transit.station.bus",
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "on"
              }
            ]
          }
        ]
      });


      var marker = new google.maps.Marker({
        position: myLatLng,
        icon: '<?php echo get_template_directory_uri(); ?>/img/map_pin.png',
        map: map
      });

      marker.addListener('click', function () {
        infowindow.open(map, marker);
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzLnx3jwbamPXFtl9bsjHtsWxNKgaV-vg&callback=initMap"
          async defer></script>


<?php

endwhile; // End of the loop.

get_footer();
?>
