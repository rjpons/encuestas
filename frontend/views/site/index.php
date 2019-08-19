<?php
use kartik\spinner\Spinner;
$tempo=true;
/* @var $this yii\web\View */

$this->title = 'Telintar - CRM';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>TELINTAR CRM</h1>

        <p class="lead">Aplicaciones CRM costumizadas para PYMES</p>
        

<?= Spinner::widget([
    'preset' => Spinner::LARGE,
    'color' => 'blue',
    'align' => 'center',
    'hidden' => $tempo,   
])?>

<?php
//echo '<button class="btn btn-primary btn-sm">';
//    echo Spinner::widget(['preset' => 'tiny', 'align' => 'left', 'hidden' => $tempo,  'caption' => 'Cargando &hellip;']);
//echo '</button>';
?>
        <p><a class="btn btn-lg btn-success" href="index.php?r=site/contact">Consultenos</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Optimización de recursos</h2>

                <p>Una forma de garantizar el correcto funcionamiento de una Pyme, es utilizando programas y aplicaciones desarrolladas a medida, que ayuden a optimizar al máximo el flujo de trabajo. .</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Software a Medida</h2>

                <p>Diseños específicos para las necesidades empresariales concretas. Se puede adaptar a través de la programación de software personalizado para adaptarse a las necesidades operativas de una organización.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Potente Framework</h2>

                <p>Estructurado con Yii2, un framework de PHP de alto rendimiento, basado en componentes para 
				desarrollar aplicaciones modernas. El nombre Yii significa "simple y evolutivo" en chino.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
