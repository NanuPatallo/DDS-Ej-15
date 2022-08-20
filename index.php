<?php

require_once 'modelo/tipoDoc.php';
require_once 'modelo/doc.php';
require_once 'modelo/obraSocial.php';
require_once 'modelo/persona.php';

$td1 = new TipoDoc();
$td1->setId(4879);
$td1->setDescripcion('DNI');
$td1->setHabilitado(true);

$td2 = new TipoDoc();
$td2->setId(4879);
$td2->setDescripcion('Pasaporte');
$td2->setHabilitado(true);

$doc1 = new Doc();
$doc1->setId(1);
$doc1->setNumero('40123123');
$doc1->setHabilitado(true);
$doc1->setTipoDoc($td1);

$doc2 = new Doc();
$doc2->setId(2);
$doc2->setNumero('50123123');
$doc2->setHabilitado(true);
$doc2->setTipoDoc($td2);

$oS = new ObraSocial();
$oS->setId(2456);
$oS->setRazonSocial('OSDE');
$oS->setCuit('305628798');
$oS->setSitioWeb('osde.com');
$oS->setTelefono('Atencion al Cliente: 4523458');

$p = new Persona();
$p->setId(1578);
$p->setNombre('Daiana');
$p->setApellido('Patallo');
$p->setFechaNac('29/04/1992');
$p->setObraSocial($oS);
$p->setDoc($doc1);
$p->setDoc($doc2);

$p->MostrarDatos();
