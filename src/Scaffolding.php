<?php
class Scaffolding{
	public static $instance=null;
	public $title = '';
	public $includes = '';
	
	public static function start(){
		if ( is_null( self::$instance )){
		  self::$instance = new self();
		}
		return self::$instance;
	}
	public function head(Array $attr){
		$this->parseAttr($attr);
	
		echo '<!DOCTYPE html>
<html>
<head>
'.$this->includes.'
</head>
<body>';
	}
	public function parseAttr(Array $attr){
		foreach($attr as $resource => $value){
			switch($resource){
				case 'title':
				  $this->title = $value;
				  break;
				case 'include':
				  if(is_array($value))
					  foreach($value as $type => $sources){
						switch($type){
							case 'css':
							   if(is_array($sources))
								   foreach($sources as $source)
									  $this->includes .= "\t<link rel='stylesheet' href='$source' type='text/css'>\n";
								else $this->includes .= "\t<link rel='stylesheet' href='$sources' type='text/css'>\n";
							   break;
							case 'javascript':
							case 'js':
							case 'script':
							   if(is_array($sources))
								   foreach($sources as $source)
									  $this->includes .= "\t<script src='$source' type='application/javascript'></script>\n";
								else $this->includes .= "\t<script src='$source' type='application/javascript'></script>\n";
							   break;
						}
				  }
				  break;
				case 'meta':
					if(is_array($value))
						foreach($value as $id => $meta_list)
							if(is_array($meta_list))
							    foreach($meta_list as $type => $values)
									$this->includes .= "\t<meta $type='$values'>\n";
							else
								$this->includes .= "\t<meta $id='$meta_list'>\n";
				  break;
			}
		}
	}
	public function end(){
		echo '</body>
</html>';
		self::$instance = null;
	}
}
