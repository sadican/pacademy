<div class="hero-unit bglightgrey">
	<div class="row-fluid">
		<div class="span12">
			<h3>Doktora</h3>
		</div>
    </div>
    <div class="row-fluid">
		<div class="span12">
			<h3>Yüksek Lisans</h3>
		</div>
    </div>
	<div class="row-fluid">
		<div class="span12">
			<h3>Eğitim</h3>
			<?php 
			for ($i=0; $i < count($educationArray); $i++) { 
				$temp = $educationArray[$i];
			?>
			<div class="row-fluid">
				<div class="span2">
					<?php echo $temp["edu_time_start"] .' - '. $temp["edu_time_end"] ?>
				</div>
				<div class="span10">
					<?php echo $temp["edu_name"] .', '. $temp["edu_department"] .', '. $temp["edu_university"] ?>
				</div>
			</div>
			<?php } ?>
		</div>
    </div>

    <div class="row-fluid">
		<div class="span12">
			<h3>Araştırma Projeleri</h3>
			<?php 
			for ($i=0; $i < count($projectArray); $i++) {
				$temp = $projectArray[$i];
			?>
			<div class="row-fluid">
				<div class="span2">
					<?php echo $temp["year_beginning"] .' - '. $temp["year_end"] ?>
				</div>
				<div class="span8">
					<?php echo $temp["name"] ?>
				</div>
				<div class="span2">
					<?php echo $temp["sponsor"] ?>
				</div>
			</div>
			<?php } ?>	
		</div>
    </div>


    <div class="row-fluid">
		<div class="span12">
			<h3>Ödüller ve Başarılar</h3>
		</div>
    </div>
    <div class="row-fluid">
		<div class="span12">
			<h3>Ağlar</h3>
			<?php 
			for ($i=0; $i < count($socialNetworkArray); $i++) { 
				$temp = $socialNetworkArray[$i];
				echo '<a href='.$temp ["account_link"] .' target="_blank">'. $temp["account_name"] .'</a>';
				echo '&nbsp;&nbsp;&nbsp;';
			}
			?>
		</div>
    </div>
</div>