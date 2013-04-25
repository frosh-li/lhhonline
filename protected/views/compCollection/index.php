<div class="multi-query clearfix">
	<div class="query">
		<div class="category">
			<h3>分类</h3>
			<div>
			<?php foreach($categories as $key => $value){?>
			<a href="index.php?r=compCollection&catid=<?php echo $value['catid']?>"><?php echo $value['name']?></a>
			<?php }?>
			</div>
		</div>
		<div class="tags clearfix">
			<h3>标签</h3>
			<ul class="clearfix">
				<?php foreach($tags as $key => $value){?>
				<li <?php 
					if($value['tagid']==$tagid){
						echo 'class="current"';
					} 
				?> ><a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $value['tagid']?>"><?php echo $value['tagname']?></a></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="g-focus">
	</div>
</div>
<div class="lists mhlists clearfix">
	
	<div class="pager">
		<span>总共<?php echo $total?>条数据,当前第<?php echo $page?>页，共<?php echo $totalpage?>页</span>
		<?php
			if($totalpage > 1){
		?>
		<a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $tagid?>&page=1" class="txt">首页</a>
		<a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $tagid?>&page=<?php echo $page-1?>" class="txt">上一页</a>
		<?php
		for ($i=1; $i<=$totalpage; $i++) {
		?>
		<a href="#"><?php echo $i?></a>
		<?php }?>
		<a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $tagid?>&page=<?php echo $page+1?>" class="txt">下一页</a>
		<a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $tagid?>&page=<?php echo $totalpage?>" class="txt">尾页</a>
		<?php }?>
		
	</div>
	
	<ul class="clear clearfix">
		<?php foreach ($lhh as $key => $value) {?>
			<li><a href="index.php?r=reader&itemid=<?php echo $value['itemid']?>&type=2" target="_blank"><img src="lhhfiles/<?php echo $value['thumbpath']?>" /></a><a href="#" class="subject"><?php echo $value['subject']?></a></li>
		<?php }?>
	</ul>
	<div class="pager">
		<span>总共<?php echo $total?>条数据,当前第<?php echo $page?>页，共<?php echo $totalpage?>页</span>
		<?php
			if($totalpage > 1){
		?>
		<a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $tagid?>&page=1" class="txt">首页</a>
		<a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $tagid?>&page=<?php echo $page-1?>" class="txt">上一页</a>
		<?php
		for ($i=1; $i<=$totalpage; $i++) {
		?>
		<a href="#"><?php echo $i?></a>
		<?php }?>
		<a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $tagid?>&page=<?php echo $page+1?>" class="txt">下一页</a>
		<a href="index.php?r=compCollection&catid=<?php echo $catid?>&tagid=<?php echo $tagid?>&page=<?php echo $totalpage?>" class="txt">尾页</a>
		<?php }?>
		
	</div>
</div>