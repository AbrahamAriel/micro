<?php
	if(!(Paginator::get('showOlder')) && (Paginator::get('showNewer'))) {
		echo '<a href="'.Paginator::urlPrevPage().'"><div class="col-2-sm left"><p><i class="fa fa-angle-double-left fa-lg fa-fw pagination pagination-icon" aria-hidden="true"></i></p></div></a>';
		echo '<div class="col-4-sm center"><p>Micro by <a href="https://protecting.faith">Hakim Zulkufli</a>.</p></div>';
		echo '<div class="col-2-sm"></div>';
	} elseif((Paginator::get('showOlder')) && !(Paginator::get('showNewer'))) {
		echo '<div class="col-2-sm"></div>';
		echo '<div class="col-4-sm center"><p>Micro by <a href="https://protecting.faith">Hakim Zulkufli</a>.</p></div>';
		echo '<a href="'.Paginator::urlNextPage().'"><div class="col-2-sm right"><p><i class="fa fa-angle-double-right fa-lg fa-fw pagination pagination-icon" aria-hidden="true"></i></p></div></a>';
	} elseif(!(Paginator::get('showOlder')) && !(Paginator::get('showNewer'))) {
		echo '<div class="col-2-sm"></div>';
		echo '<div class="col-4-sm center"><p>Micro by <a href="https://protecting.faith">Hakim Zulkufli</a>.</p></div>';
		echo '<div class="col-2-sm"></div>';
	} else {
		echo '<a href="'.Paginator::urlPrevPage().'"><div class="col-2-sm left"><p><i class="fa fa-angle-double-left fa-lg fa-fw pagination pagination-icon" aria-hidden="true"></i></p></div></a>';
		echo '<div class="col-4-sm center"><p>Micro by <a href="https://protecting.faith">Hakim Zulkufli</a>.</p></div>';
		echo '<a href="'.Paginator::urlNextPage().'"><div class="col-2-sm right"><p><i class="fa fa-angle-double-right fa-lg fa-fw pagination pagination-icon" aria-hidden="true"></i></p></div></a>';
	}
?>