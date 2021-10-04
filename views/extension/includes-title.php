<div class="row">
	<div class="col-12" style="padding-left:0;">
		<div class="row">
			<div class="col-6">
				<h2 style="font-weight: bold; font-size: 26px;display: block;">
					<?php
					if(isset($page['title'])){
						if(!empty($page['title'])){
							echo $page['title'];
						}
					}
					?>
				</h2>
			</div>
			<div class="col-6">
				<h2 style="font-weight: bold; font-size: 20px; float: right;display: block;">
					<?php
					if(isset($page['subtitle'])){
						if(!empty($page['subtitle'])){
							echo '/' . $page['subtitle'];
						}
					}
					?>
				</h2>
			</div>
		</div>
		
		
	</div>

</div>