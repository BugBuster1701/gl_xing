
<!-- indexer::stop -->
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>
	<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>
<?php foreach ($this->xing as $xing): ?>
	<div class="xing_image">
		<a href="https://www.xing.com/companies/<?php echo $xing['xingprofil']; ?>" <?php echo $xing['xingtarget']; ?>><?php echo $xing['xinglayout']; ?></a>
	</div>
<?php endforeach; ?>
</div>
<!-- indexer::continue -->