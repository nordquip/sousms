<?php
/*
ConfigManager.class.php
By: Jeff Miller, 2012-11-19
Makes available configuratin data from XML file.
Usage:
	require_once("ConfigManager.class.php");
	$cfg = new ConfigManager();
	echo "Login Hash: " . $cfg->loginHash;
*/
class ConfigManager {
	private $configFile = 'sousmsConfigLocal.xml';
	private $doc = null;
	
	public function __construct($config = '') {
		$files = array(
			$config,
			(isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : '/var/www/html') . '/service/' . $this->configFile,
			$this->configFile
		);
		foreach ($files as $file) {
			if (file_exists($file)) {
				$this->configFile = $file;
				$this->doc = simplexml_load_file($this->configFile);
				break;
			}
		}
	}
	
	public function __get($key) {
		return (isset($this->doc) ? $this->doc->{$key} : null);
	}
	
	public function __destruct() {
		$this->doc = null;
	}
}
?>