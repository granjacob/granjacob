<?php

namespace system\uranus\php\generator;
use system\jupiter\core\GeneratorClass;
use system\uranus\generator\TableReference;
use system\uranus\generator\ClassAttribute;
use system\uranus\generator\ClassMethod;

/* ####################### ClassDef : USAGE EXAMPLE ####################### 

	$varClassDef = new ClassDef();

	$varClassDef->setNamespace("ClassDef_namespace_EXAMPLE");

	$varClassDef->setName("ClassDef_name_EXAMPLE");

	$varClassDef->setExtensionClass("ClassDef_extensionClass_EXAMPLE");

	$varClassDef->setImplementClass("ClassDef_implementClass_EXAMPLE");

	$vartableColumnsMap = new TableReference();
	$varClassDef->addTableColumnsMapItem( $varTableColumnsMapItem );

	$varattributes = new ClassAttribute();
	$varClassDef->addAttributesItem( $varAttributesItem );

	$varmethods = new ClassMethod();
	$varClassDef->addMethodsItem( $varMethodsItem );

	$varClassDef->write();

    ####################### USAGE EXAMPLE ####################### **/ 

class ClassDef extends GeneratorClass {

	public $namespace;

	public $name;

	public $extensionClass;

	public $implementClass;

	public $tableColumnsMap;

	public $attributes;

	public $methods;

public function __construct()

{

		parent :: __construct();

	$this->namespace =  null;

	$this->name =  null;

	$this->extensionClass =  null;

	$this->implementClass =  null;

	$this->tableColumnsMap =  new TableReference();

	$this->attributes =  new ClassAttribute();

	$this->methods =  new ClassMethod();

}

	public function setNamespace(  $namespace)
{

		 $this->namespace = $namespace;
return $this; 
}

	public function setName(  $name)
{

		 $this->name = $name;
return $this; 
}

	public function setExtensionClass(  $extensionClass)
{

		 $this->extensionClass = $extensionClass;
return $this; 
}

	public function setImplementClass(  $implementClass)
{

		 $this->implementClass = $implementClass;
return $this; 
}

	public function setTableColumnsMap( TableReference $tableColumnsMap)
{

		 $this->tableColumnsMap = $tableColumnsMap;
return $this; 
}

	public function setAttributes( ClassAttribute $attributes)
{

		 $this->attributes = $attributes;
return $this; 
}

	public function setMethods( ClassMethod $methods)
{

		 $this->methods = $methods;
return $this; 
}

	public function getNamespace()
{

		return $this->namespace;
}

	public function getName()
{

		return $this->name;
}

	public function getExtensionClass()
{

		return $this->extensionClass;
}

	public function getImplementClass()
{

		return $this->implementClass;
}

	public function getTableColumnsMap()
{

		return $this->tableColumnsMap;
}

	public function getAttributes()
{

		return $this->attributes;
}

	public function getMethods()
{

		return $this->methods;
}

	public function addTableColumnsMapItem( TableReference $item )
{

		$this->tableColumnsMap->append( clone $item);
return $this; 
}

	public function addAttributesItem( ClassAttribute $item )
{

		$this->attributes->append( clone $item);
return $this; 
}

	public function addMethodsItem( ClassMethod $item )
{

		$this->methods->append( clone $item);
return $this; 
}

	public function write() {

		$output = ""; 

		$this->validateData();

$output .= "<?php";
$output .= "";
$output .= "            namespace {$this->namespace};";
$output .= "            class {$this->name} ";
if (($this->verifyOptionalExpression($this->extensionClass))) {


$output .= "extends {$this->extensionClass} ";
if (($this->verifyOptionalExpression($this->implementClass))) {


$output .= "implements {$this->implementClass}";

}

$output .= "";

}

$output .= " {";
$output .= "";
$output .= "                public function __construct()";
$output .= "                {";
$output .= "                    parent :: __construct();";
$output .= "";
$output .= "                    ";		
$output .= $this->writeArrayObject( $this->tableColumnsMap, TableReference::class );

$output .= "";
$output .= "                }";
$output .= "";
$output .= "                ";		
$output .= $this->writeArrayObject( $this->attributes, ClassAttribute::class );

$output .= "";
$output .= "";
$output .= "                ";		
$output .= $this->writeArrayObject( $this->attributes, ClassGetter::class );

$output .= "";
$output .= "";
$output .= "                ";		
$output .= $this->writeArrayObject( $this->attributes, ClassSetter::class );

$output .= "";
$output .= "";
$output .= "                ";		
$output .= $this->writeArrayObject( $this->methods, ClassMethod::class );

$output .= "";
$output .= "            }";
$output .= "";
$output .= "            ?>";
 return $output; }

 } 


?>

