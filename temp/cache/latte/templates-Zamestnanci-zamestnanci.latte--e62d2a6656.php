<?php

use Latte\Runtime as LR;

/** source: D:\xampp\htdocs\www\autoservis\app\Presenters/templates/Zamestnanci/zamestnanci.latte */
final class Templatee62d2a6656 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['z' => '21'], $this->params) as $ʟ_v => $ʟ_l) {
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
                <th scope="col">ID</th>
                <th scope="col">Jméno</th>
                <th scope="col">Příjmení</th>
                <th scope="col">Telefon</th>
                <th scope="col">Editovat</th>
                <th scope="col">Smazat</th>
            </tr>
        </thead>

        <tbody>
        <tr>
';
		$iterations = 0;
		foreach ($zamestnanci as $z) /* line 21 */ {
			echo '    <td>';
			echo LR\Filters::escapeHtmlText($z->id) /* line 22 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($z->jmeno) /* line 23 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($z->prijmeni) /* line 24 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($z->telefon) /* line 25 */;
			echo '</td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("edit", [$z->id])) /* line 26 */;
			echo '">edit</a></td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete", [$z->id])) /* line 27 */;
			echo '">delete</a></td>
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
