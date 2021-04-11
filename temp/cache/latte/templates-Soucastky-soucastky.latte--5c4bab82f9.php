<?php

use Latte\Runtime as LR;

/** source: D:\xampp\htdocs\www\autoservis\app\Presenters/templates/Soucastky/soucastky.latte */
final class Template5c4bab82f9 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['s' => '27'], $this->params) as $ʟ_v => $ʟ_l) {
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
                <th scope="col">Zaměstnanci ID</th>
                <th scope="col">Opravy ID</th>
                <th scope="col">Součástka</th>
                <th scope="col">Typ vozu</th>
                <th scope="col">Cena</th>
                <th scope="col">Skladem</th>
                <th scope="col">Automobily ID</th>
                <th scope="col">Automobily typ vozu ID</th>
                <th scope="col">Automobily majitelé ID</th>
                <th scope="col">Editovat</th>
                <th scope="col">Smazat</th>
            </tr>
        </thead>

        <tbody>
        <tr>
';
		$iterations = 0;
		foreach ($soucastky as $s) /* line 27 */ {
			echo '

    <td>';
			echo LR\Filters::escapeHtmlText($s->id) /* line 30 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->zamestnanci_id) /* line 31 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->opravy_id) /* line 32 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->soucastka) /* line 33 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->typ_vozu) /* line 34 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->cena) /* line 35 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->skladem_ks) /* line 36 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->automobily_id) /* line 37 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->automobily_typ_vozu_id) /* line 38 */;
			echo '</td>
    <td>';
			echo LR\Filters::escapeHtmlText($s->automobily_majitele_id) /* line 39 */;
			echo '</td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("edit", [$s->id])) /* line 40 */;
			echo '">edit</a></td>
    <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete", [$s->id])) /* line 41 */;
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
