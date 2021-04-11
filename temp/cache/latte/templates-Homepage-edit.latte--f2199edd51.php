<?php

use Latte\Runtime as LR;

/** source: D:\xampp\htdocs\www\autoservis\app\Presenters/templates/Homepage/edit.latte */
final class Templatef2199edd51 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		echo "\n";
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '  <div class="container">

        <h1 class="display-4" style="text-align:center;">Editace úkolu</h1>

';
		/* line 7 */ $_tmp = $this->global->uiControl->getComponent("postForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '<br>
<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("default")) /* line 9 */;
		echo '"><button class="button btn btn-danger col-lg-12 col-md-12 col-sm-12" name="back" value="back">Zpět</button></a>
</div>

';
	}

}
