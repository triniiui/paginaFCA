@extends('layouts.vistas')

@section('vistas-content')

<x-hero 
    imagen="assets/img/investigacion/i4.png"
    titulo="Publicaciónes Científicas"
    subtitulo="Poner subtítulo correcto"
/>

<div class="container my-5">
    <p class="mb-5 text-justify">
        Las publicaciones científicas son el producto del ejercicio profesional, académico y de investigación 
        de los profesores de la Facultad de Contaduría y Administración, con el propósito de difundir y divulgar 
        los resultados y conclusiones de los trabajos de investigación y vinculación en los que participan.
    </p>
</div>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">
        Relación de Publicaciones Científicas de la Facultad de Contaduría y Administración (2025)
    </h3>

    <!-- COMBO ÚNICO -->
    <div class="mb-3">
        <label for="combo_2025" class="form-label">Seleccionar alguna opción</label>
        <select id="combo_2025" class="form-select">
            <option value="">-- Seleccione --</option>
            <option value="articulos2025">Artículos en revistas científicas (2025)</option>
            <option value="capitulos2025">Capítulos de libros (2025)</option>
            <option value="libros2025">Libros (2025)</option>
        </select>
    </div>

    <!-- CONTENIDO -->
    <div id="contenido_2025" class="mt-4"></div>

</div>

<script>
    const combo2025 = document.getElementById('combo_2025');
    const contenido2025 = document.getElementById('contenido_2025');

    const contenidos2025 = {
        articulos2025: `
            <h5>Artículos en revistas científicas (2025)</h5>
            <ul>
                <li>Castro Góngora, E., Mul Encalada, J., & Ojeda López, R. N. (2025). Asociaciones empresariales y su contribución al desarrollo de las microempresas: Estudio de caso. <em>Desarrollo Sustentable, Negocios, Emprendimiento y Educación</em>, 6(62), 27–42. 
                <a href="https://ojs.eumed.net/rev/index.php/rilcoDS/issue/view/dec24dic24" target="_blank">Ver artículo</a></li>

                <li>Moscoso García, S., López Canto, L. E., & Jiménez, E. (2025). Proceso de sucesión de una empresa familiar. <em>Desarrollo Sustentable, Negocios, Emprendimiento y Educación</em>, 7(63), 1–16. 
                <a href="https://ojs.eumed.net/rev/index.php/rilcoDS/issue/view/enero25/ene25" target="_blank">Ver artículo</a></li>

                <li>Zapata Rejón, A., Jiménez Díaz, O., & López Canto, L. E. (2025). Los riesgos psicosociales, una área de oportunidad en el sector servicios. <em>Desarrollo Sustentable, Negocios, Emprendimiento y Educación</em>, 7(66). 
                <a href="https://ojs.eumed.net/rev/index.php/rilcoDS/issue/view/abril25/abril25" target="_blank">Ver artículo</a></li>

                <li>May Roman, B. Y., Duarte Cáceres, L. G., & Río Herrera, L. M. (2026, enero). Efectos del endeudamiento sobre la rentabilidad de los bancos en México. <em>Revista Académica de Investigación en Finanzas</em>, 2(3), 1–11. 
                <a href="https://iesfi.edu.mx/wp-content/uploads/2026/01/RAIF-ano-2-numero-3.pdf" target="_blank">Ver artículo</a></li>

                <li>Miranda Manrique, D. A., Duarte Cáceres, L. G., & May Roman, B. Y. (2025, diciembre 30). Educación financiera y crédito en jóvenes universitarios del área de negocios. <em>Revista del Centro de Graduados. Instituto Tecnológico de Mérida</em>, 40(113), 136–142. 
                <a href="https://www.revistadelcentrodegraduados.com/p/v-40-n-113.html" target="_blank">Ver artículo</a> | 
                <a href="https://drive.google.com/file/d/1HoFe-Y7R9pJh6r3duJwRm0LqFpZQT1I/view" target="_blank">Descargar PDF</a></li>
            </ul>
        `,
        capitulos2025: `
            <h5>Capítulos de libros (2025)</h5>
            <ul>
                <li>Duarte Cáceres, L., Heredia, L., & Río Herrera, L. (2025). Labor inclusion of people with a disability condition: Gender perspective. En M. Valeri & C. Salloum (Eds.), <em>Strategic diversity and inclusion in organizations: Unity in variety</em> (pp. 77–86). De Gruyter. 
                <a href="https://doi.org/10.1515/9783111673707-006" target="_blank">Ver capítulo</a></li>

                <li>Alonzo-Godoy, M. C., Suárez, D. R., Sabido-Domínguez, T. J., & Alonso-Novelo, V. (2024). Caracterización de perspectivas y necesidades de los grupos de interés: Un enfoque desde la maestría en gestión y cambio organizacional. En J. L. Mateu, G. C. Molina & L. Luceño (Eds.), <em>Innovación docente en ciencias sociales y disciplinas artísticas</em> (pp. 282–307). Dykinson. 
                <a href="https://dialnet.unirioja.es/servlet/libro?codigo=991128" target="_blank">Ver capítulo</a></li>

                <li>Barroso-Tanoira, F. G., Salazar-Cantón, J. R., & Alonso-Novelo, V. (2024). Enseñanza de la responsabilidad social a través de talleres de buenas prácticas desarrolladas por alumnos de la licenciatura en administración: Un enfoque basado en aprendizaje-servicio en el sureste de México. En J. L. Mateu, G. C. Molina & L. Luceño (Eds.), <em>Innovación docente en ciencias sociales y disciplinas artísticas</em> (pp. 379–394). Dykinson. 
                <a href="https://dialnet.unirioja.es/servlet/libro?codigo=991128" target="_blank">Ver capítulo</a></li>
            </ul>
        `,
        libros2025: `
            <h5>Libros (2025)</h5>
            <ul>
                <li>Uc, Lucio y Duarte, L. (Coord) (2026). <em>Informe sobre la Cultura Financiera en las Micro, Pequeñas y Medianas Empresas Yucatecas</em>. Eumed. 
                <a href="https://www.eumed.net/es/libros/libro/cultura-financiera" target="_blank">Ver libro</a></li>

                <li>Bojórquez, A., Flores, A., & Vargas, M. (2025). <em>Tejiendo sueños en el Mayab: Relatos de emprendimiento y tradición</em>. Incunabula. 
                <a href="https://isbnmexico.indautor.cerlalc.org/catalogo.php?mode=detalle&nt=449741" target="_blank">Ver libro</a></li>
            </ul>
        `
    };

    combo2025.addEventListener('change', function() {
        contenido2025.innerHTML = contenidos2025[this.value] || '';
    });
</script>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">
        Relación de Publicaciones Científicas de la Facultad de Contaduría y Administración (2021–2024)
    </h3>

    <!-- COMBO ÚNICO -->
    <div class="mb-3">
        <label for="combo_2124" class="form-label">Seleccionar alguna opción</label>
        <select id="combo_2124" class="form-select">
            <option value="">-- Seleccione --</option>
            <option value="articulos2124">Artículos en revistas científicas (2021–2024)</option>
            <option value="capitulos2124">Capítulos de libros (2021–2024)</option>
            <option value="libros2124">Libros (2021–2024)</option>
        </select>
    </div>

    <!-- CONTENIDO -->
    <div id="contenido_2124" class="mt-4"></div>

</div>

<script>
    const combo2124 = document.getElementById('combo_2124');
    const contenido2124 = document.getElementById('contenido_2124');

    const contenidos2124 = {
        articulos2124: `
            <h5>Artículos en revistas científicas (2021–2024)</h5>
            <ul>
                <li>Pérez-Brito, A., Duarte-Cáceres, L., & Bojórquez-Zapata, M. (2021). <em>The Effects of Covid-19 on the Competitiveness of Touristic Business in Yucatan</em>. IJMSR, 9(1), 9–12. 
                <a href="https://www.arcjournals.org/pdfs/ijmsr/v9-i1/2.pdf" target="_blank">Ver artículo</a></li>

                <li>Mayagoitia-Sanchez, M., Duarte-Cáceres, L., & Rosado-Muñoz, Y. (2021). <em>Financial Habits of Savings by Customers of a Banking Entity</em>. IJMSR, 9(1), 1–8. 
                <a href="https://www.arcjournals.org/pdfs/ijmsr/v9-i1/1.pdf" target="_blank">Ver artículo</a></li>

                <li>Flores-Novelo, A., Arroyo-Solís, S., & Camacho-Gómez, M. (2021). <em>Éxito y Satisfacción Laboral en Mujeres Dueñas de Pymes en Mérida</em>. Revista Hitos, 27(78). 
                <a href="http://ri.ujat.mx/handle/20.500.12107/3776" target="_blank">Ver artículo</a></li>

                <li>Pérez-Brito, A., Bojórquez-Zapata, M. (2020). <em>Financial Management as an Important Competitiveness Factor in SMEs Hotel Businesses in Yucatan</em>. IJMSR, 8(8), 20–28. 
                <a href="https://www.arcjournals.org/pdfs/ijmsr/v8-i8/3.pdf" target="_blank">Ver artículo</a></li>
            </ul>
        `,
        capitulos2124: `
            <h5>Capítulos de libros (2021–2024)</h5>
            <ul>
                <li>Bojórquez, A., De los Santos, I. & Rodríguez, G. (2021). <em>Evolución del ISR e IVA</em>. En <em>Sistema Tributario, Autonomía y Crecimiento en México</em> (pp. 63–102). UTM. 
                <a href="https://www.researchgate.net/publication/378977566_SISTEMA_TRIBUTARIO_AUTONOMIA_Y_CRECIIMIENTO_EN_MEXICO" target="_blank">Ver capítulo</a></li>

                <li>Bojórquez, A., De los Santos, I. & Martín, M. (2021). <em>Relación entre recaudación fiscal estatal y PIB</em>. En <em>Sistema Tributario, Autonomía y Crecimiento en México</em> (pp. 103–128). UTM. 
                <a href="https://www.researchgate.net/publication/378977566_SISTEMA_TRIBUTARIO_AUTONOMIA_Y_CRECIIMIENTO_EN_MEXICO" target="_blank">Ver capítulo</a></li>

                <li>Villasuso, V., Avilés, L. & Pacheco, G. (2021). <em>Implicaciones del Sistema Nacional de Coordinación Fiscal</em>. En <em>Sistema Tributario, Autonomía y Crecimiento en México</em> (pp. 129–172). UTM. 
                <a href="https://www.researchgate.net/publication/378977566_SISTEMA_TRIBUTARIO_AUTONOMIA_Y_CRECIIMIENTO_EN_MEXICO" target="_blank">Ver capítulo</a></li>

                <li>Bojórquez, A. & Mena, F. (2021). <em>Análisis de la Autonomía Estatal en México 2004–2019</em>. En <em>Sistema Tributario, Autonomía y Crecimiento en México</em> (pp. 173–217). UTM. 
                <a href="https://www.researchgate.net/publication/378977566_SISTEMA_TRIBUTARIO_AUTONOMIA_Y_CRECIIMIENTO_EN_MEXICO" target="_blank">Ver capítulo</a></li>
            </ul>
        `,
        libros2124: `
            <h5>Libros (2021–2024)</h5>
            <ul>
                <li>Rosado, Y., & Duarte, L.G. (Coords.). (2021). <em>Creación de valor. Casos de estudio</em>. Editorial Qartuppi. DOI: 10.29410/QTP.21.04</li>

                <li>Bojórquez, A., De los Santos, I., Rodríguez, N. & Olivares, R. (2021). <em>Sistema Tributario, Autonomía y Crecimiento en México</em>. UTM. 
                <a href="https://isbnmexico.indautor.cerlalc.org/catalogo.php?mode=detalle&nt=330620" target="_blank">Ver libro</a></li>

                <li>Rodríguez, C., Tovar, J., Montiel, O., & Flores, A. (2021). <em>Nuevas perspectivas sobre la investigación y la práctica en Publicidad y mercadotecnia en México</em>. UACJ. 
                <a href="https://elibros.uacj.mx/omp/index.php/publicaciones/catalog/view/194/173/1062-1" target="_blank">Ver libro</a></li>

                <li>Flores, A., Bojórquez, A. & Camacho, M. (2021). <em>Mercadotecnia con enfoque social: reflexiones y casos</em>. Editorial Incunabula. 
                <a href="https://www.researchgate.net/publication/360476540_mercadotecnia_con_enfoque_social_reflexiones_y_casos" target="_blank">Ver libro</a></li>
            </ul>
        `
    };

    combo2124.addEventListener('change', function() {
        contenido2124.innerHTML = contenidos2124[this.value] || '';
    });
</script>

<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">
        Relación de Publicaciones Científicas de la Facultad de Contaduría y Administración (2017–2020)
    </h3>

    <!-- COMBO ÚNICO -->
    <div class="mb-3">
        <label for="combo_1720" class="form-label">Seleccionar alguna opción</label>
        <select id="combo_1720" class="form-select">
            <option value="">-- Seleccione --</option>
            <option value="articulos1720">Artículos en revistas científicas (2017–2020)</option>
            <option value="capitulos1720">Capítulos de libros (2017–2020)</option>
            <option value="libros1720">Libros (2017–2020)</option>
        </select>
    </div>

    <!-- CONTENIDO -->
    <div id="contenido_1720" class="mt-4"></div>

</div>

<script>
    const combo1720 = document.getElementById('combo_1720');
    const contenido1720 = document.getElementById('contenido_1720');

    const contenidos1720 = {
        articulos1720: `
            <h5>Artículos en revistas científicas (2017–2020)</h5>
            <ul>
                <li>Pardenilla-Loeza, O. & Duarte-Cáceres, L. (2020). La inversión y la tecnología en las unidades económicas rurales de Yucatán. <em>Revista del Centro de Graduados e Investigación</em>, 35(83), 128–136.</li>
                <li>Cauich-Castilla, G., Rosado-Muñoz, Y. & Duarte-Cáceres, L. (2020). Asociación de indicadores financieros con capacidad productiva: empresas de consumo frecuente. <em>Revista del Centro de Graduados e Investigación</em>, 35(81), 27–32.</li>
                <li>Flores, A., Hernández, M., Quintal, P., & Ramírez, A. (2019). Implicaciones de visión basada en recursos en el marketing: Caso Príncipe Tutul-Xiu. <em>Caderno Profesional de Marketing UNIPEP (Brasil)</em>, 7(4), 40–54.</li>
                <li>Espinosa, T., Maldonado, G. & Uc, L. (2018). Los ingresos familiares como fuente de financiamiento de micronegocios de mujeres en la Península de Yucatán. <em>Revista Tec Empresarial</em>, 12(1), 31–38.</li>
            </ul>
        `,
        capitulos1720: `
            <h5>Capítulos de libros (2017–2020)</h5>
            <ul>
                <li>Flores, A., Bojorquez, A. & Mata, C. (2020). Public Policies on Entrepreneurial Activity in the Mexico of the 20th Century. En <em>The History of Entrepreneurship in Mexico</em>. Reino Unido.</li>
                <li>Pérez, A., Duarte, L. & Bojorquez, M. (2020). La Gestión Financiera y la Competitividad en las Pymes Hoteleras del Estado de Yucatán. En <em>Recursos Humanos y Medio Ambiente: Estudio de Factores</em>. Editorial LICEO.</li>
                <li>Ramírez, S., Ríos, O. & Uc, L. (2018). Exención de pago del impuesto sobre nómina en Colima. En <em>Sistemas financieros y fiscales y su impacto en las organizaciones</em>. Editorial Casia Creaciones.</li>
                <li>Bojórquez, A., Duarte, L. & Uc, L. (2018). Identification of Strategic Sectors in the Socioeconomic Regions of Mexico. En <em>Entrepreneurship, Culture, Finance and Economic Development in Mexican Small Business</em>. Universidad Autónoma de Aguascalientes.</li>
            </ul>
        `,
        libros1720: `
            <h5>Libros (2017–2020)</h5>
            <ul>
                <li>Rivero, G., Rosado, L. & Perez, A. (2018). <em>El uso de las tarjetas de crédito en las Finanzas Personales</em>. Editorial Académica Española. ISBN: 978-620-2-11866-8.</li>
                <li>Bojorquez, M., Pérez, A., Hersey, D. & Basulto, J. (2017). <em>Preparación Financiera para el Retiro en México</em>. UADY.</li>
            </ul>
        `
    };

    combo1720.addEventListener('change', function() {
        contenido1720.innerHTML = contenidos1720[this.value] || '';
    });
</script>

<div class="container my-5 text-center">
    <a href="#" class="btn btn-primary mb-4">
        Catálogo de publicaciones 2013–2017
    </a>

    <p class="mt-3">
        <strong>Contacto:</strong> 
        <a href="mailto:investigacion.fca@correo.uady.mx">investigacion.fca@correo.uady.mx</a>
    </p>
</div>

@endsection
