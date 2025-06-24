<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContenidoBase extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etiquetas')->insert([
            'nombre' => "Economía",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Música",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Cultura",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Nota roja",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Entretenimiento",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Deportes",
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => "Política",
        ]);


        DB::table('usuarios')->insert([
            'nombre' => "Ignacio",
            'email' => "ignacio@mail.com",
            'password' => "1234",
        ]);
        DB::table('usuarios')->insert([
            'nombre' => "Sarah",
            'email' => "sa@mail.com",
            'password' => "5678",
        ]);
        DB::table('usuarios')->insert([
            'nombre' => "Romi",
            'email' => "orim@mail.com",
            'password' => "9012",
        ]);
        DB::table('usuarios')->insert([
            'nombre' => "Laura",
            'email' => "alrua@mail.com",
            'password' => "3456",
        ]);


        DB::table('articulos')->insert([
            'titulo' => "Se realiza investigación en contra de reconocido inversor de Wall Street",
            'portada' => "https://i.pinimg.com/736x/1d/ba/a8/1dbaa8b1e6d1a726d761eb740ab9ca1c.jpg",
            'descripcion' => "Autoridades financieras investigan a influyente figura de Wall Street.",
            'contenido' => "<p>Las autoridades han iniciado una investigación formal contra un renombrado inversor de Wall Street, acusado de manipulación del mercado y otras irregularidades financieras. La Comisión de Valores señaló que hay pruebas suficientes para continuar con el proceso legal. Expertos consideran que este caso podría tener repercusiones significativas en el mercado bursátil internacional.</p>",
            'usuario_id' => 1,
        ]);

        DB::table('articulos')->insert([
            'titulo' => "Se descubre una nueva forma de cultivar lechuga",
            'portada' => "https://i.pinimg.com/736x/83/d1/3d/83d13d764c59a16bbbcce3cfba54479f.jpg",
            'descripcion' => "Científicos desarrollan método innovador para el cultivo eficiente de lechuga.",
            'contenido' => "<p>Un grupo de investigadores agrícolas ha descubierto una técnica revolucionaria para cultivar lechuga utilizando menos agua y espacio. El método, basado en hidroponía vertical, promete mejorar la producción en zonas urbanas y reducir el impacto ambiental de la agricultura tradicional.</p>",
            'usuario_id' => 1,
        ]);

        DB::table('articulos')->insert([
            'titulo' => "Diplomatico chino enfurece contra el parlamento",
            'portada' => "https://i.pinimg.com/736x/2b/92/be/2b92beb798315663878aa8954d5f3f2b.jpg",
            'descripcion' => "Tensión política: diplomático chino protagoniza fuerte discusión en el parlamento.",
            'contenido' => "<p>Durante una acalorada sesión del parlamento, un diplomático chino expresó su molestia ante declaraciones consideradas ofensivas por su gobierno. El altercado provocó la suspensión temporal del diálogo bilateral. Analistas advierten que este conflicto podría enfriar las relaciones diplomáticas entre ambos países.</p>",
            'usuario_id' => 2,
        ]);

        DB::table('articulos')->insert([
            'titulo' => "Se abre nueva linea de Call Center en el país",
            'portada' => "https://i.pinimg.com/736x/d9/8f/33/d98f333c28b9a821220831cc8acbfddb.jpg",
            'descripcion' => "Empresa internacional inaugura nueva sede de atención al cliente en el país.",
            'contenido' => "<p>Una reconocida compañía de telecomunicaciones ha abierto una nueva línea de call center en la región norte del país, generando más de 300 empleos directos. La inversión apunta a fortalecer la atención al cliente en América Latina y mejorar la calidad del servicio en múltiples idiomas.</p>",
            'usuario_id' => 3,
        ]);

        DB::table('articulos')->insert([
            'titulo' => "Estalla enfrentamiento en la frontera del país",
            'portada' => "https://i.pinimg.com/736x/5f/9c/1d/5f9c1d9d15167e0a59e6dad41e8556f9.jpg",
            'descripcion' => "Conflicto armado se desata en zona fronteriza; autoridades refuerzan vigilancia.",
            'contenido' => "<p>Un enfrentamiento entre fuerzas militares y presuntos grupos armados irregulares ha causado tensión en la frontera sur del país. Según fuentes oficiales, se desplegaron refuerzos para garantizar la seguridad de los pobladores. Las autoridades piden calma mientras se investigan los motivos del ataque.</p>",
            'usuario_id' => 4,
        ]);

        DB::table('articulos')->insert([
            'titulo' => "Nueva selección de baloncesto representará a la nación en invierno",
            'portada' => "https://i.pinimg.com/736x/55/e1/76/55e176ea12515f621ec9ae63a8de9fec.jpg",
            'descripcion' => "El país tendrá un nuevo equipo nacional de baloncesto en la próxima temporada.",
            'contenido' => "<p>La Federación Nacional de Deportes presentó oficialmente a la nueva selección de baloncesto que representará al país en los juegos de invierno. Conformada por jóvenes promesas y jugadores experimentados, el equipo busca obtener una posición destacada en el campeonato internacional.</p>",
            'usuario_id' => 4,
        ]);

        
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 1,
            'etiqueta_id' => 1,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 1,
            'etiqueta_id' => 3,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 2,
            'etiqueta_id' => 3,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 2,
            'etiqueta_id' => 1,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 3,
            'etiqueta_id' => 7,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 4,
            'etiqueta_id' => 1,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 5,
            'etiqueta_id' => 4,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 5,
            'etiqueta_id' => 7,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 6,
            'etiqueta_id' => 6,
        ]);
        DB::table('articulo_etiqueta')->insert([
            'articulo_id' => 6,
            'etiqueta_id' => 3,
        ]);

    }
}
