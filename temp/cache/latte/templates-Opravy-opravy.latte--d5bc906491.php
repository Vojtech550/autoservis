<?php

use Latte\Runtime as LR;

/** source: D:\xampp\htdocs\www\autoservis\app\Presenters/templates/Opravy/opravy.latte */
final class Templated5bc906491 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['o' => '23'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->renderBlock($ʟ_nm = 'scripts', [], 'html') /* line 2 */;
		echo '            <div class="container">
';
		/* line 4 */ $_tmp = $this->global->uiControl->getComponent("postForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '            <div class="column">
    <table class="table table-striped table-bordered" style="margin-top:1%;">

        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Datum</th>
                <th scope="col">Doba opravy</th>
                <th scope="col">Zaměstnanec ID</th>
                <th scope="col">Součástky ID</th>
                <th scope="col">Počet/ks</th>
                <th scope="col">Editovat</th>
                <th scope="col">Smazat</th>
            </tr>
        </thead>

        <tbody>
        <tr>
';
		$iterations = 0;
		foreach ($opravy as $o) /* line 23 */ {
			echo '

    <td>';
			echo LR\Filters::escapeHtmlText($o->id) /* line 26 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($o->datum) /* line 27 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($o->doba_opravy) /* line 28 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($o->zamestnanec_id) /* line 29 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($o->soucastky_id) /* line 30 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($o->pocet_ks) /* line 31 */;
			echo '</td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("edit", [$o->id])) /* line 32 */;
			echo '">edit</a></td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete", [$o->id])) /* line 33 */;
			echo '">delete</i></a></td>


        </tr>
';
			$iterations++;
		}
		echo '
        </tbody>
    </table>
  </div>
  </div>
    </div>';
	}

}
