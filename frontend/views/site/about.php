<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Acerca de nosotros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
 <div class="well">
<span class="glyphicon glyphicon-hand-right"></span> En el mundo competitivo y globalizado existen muchas empresas que lo ayudarán a satisfacer sus necesidades tecnológicas de una u otra forma, 
	la diferencia está en el grado del conocimiento y expertise de sus necesidades y en los medios tecnológicos adecuados a su sector.
</div>

<div class="well">
 <span class="glyphicon glyphicon-hand-right"></span> En cada integrante de Teintar vive el ímpetu por conocer de su sector o industria y es por eso que llevamos más de 10 años especializando soluciones a mercados específicos, porque muchas horas hombre de programación en "retail" significan poco en servicios financieros.
</div>
<div class="well">
<span class="glyphicon glyphicon-hand-right"></span> Las necesidades específicas o detalladas así lo requieren, las abordamos con Desarrollo de soluciones a la medida, utilizando un conjunto de herramientas informáticas que aumentan la productividad y disminuyen el tiempo y costo de los proyectos, beneficiando a su organización.
</div>
<div align="center">
<?= Html::img('@web/imagen/servicios.jpg', ['alt' => 'Servicios']) ?>
</div>
</div>
