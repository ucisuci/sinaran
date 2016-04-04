<?php
Yii::import('zii.widgets.grid.CGridView');
class myGridView extends CGridView {
	
	public $theadCss;
  
	/**
	 * Renders the table header.
	 */
	public function renderTableHeader()
	{
	
		$printCssThead = "";
		if (!empty($this->theadCss)) {
			$printCssThead = "class=\"".$this->theadCss."\"";
		}
		
		if(!$this->hideHeader)
		{
			echo "<thead $printCssThead >\n";

			if($this->filterPosition===self::FILTER_POS_HEADER)
				$this->renderFilter();

			echo "<tr>\n";
			foreach($this->columns as $column)
				$column->renderHeaderCell();
			echo "</tr>\n";

			if($this->filterPosition===self::FILTER_POS_BODY)
				$this->renderFilter();

			echo "</thead>\n";
		}
		elseif($this->filter!==null && ($this->filterPosition===self::FILTER_POS_HEADER || $this->filterPosition===self::FILTER_POS_BODY))
		{
			echo "<thead $printCssThead >\n";
			$this->renderFilter();
			echo "</thead>\n";
		}
	}
  
}