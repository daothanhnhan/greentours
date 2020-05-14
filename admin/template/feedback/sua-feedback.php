<?php 
	$feedback = $action->getDetail('feedback', 'id', $_GET['id']);//var_dump($feedback);
?>
<style>
h1, i {
	float: none;
}
</style>
<div class="container">
	<p><a href="index.php?page=feedback" style="font-size: 24px;">Quay lại</a></p>
	<table class="table">
	    <tbody>
	      <tr>
	        <td>First name</td>
	        <td><?= $feedback['first_name'] ?></td>
	      </tr>
	      <tr>
	        <td>Last name</td>
	        <td><?= $feedback['last_name'] ?></td>
	      </tr>
	      <tr>
	        <td>Email</td>
	        <td><?= $feedback['email'] ?></td>
	      </tr>
	      <tr>
	        <td>Your trip code</td>
	        <td><?= $feedback['code'] ?></td>
	      </tr>
	    </tbody>
  	</table>

  	<h1>
  		Your overall experience:
  		<?php for ($i=0;$i<$feedback['experience'];$i++) { ?>
  			<i class="fa fa-star" aria-hidden="true"></i>
  		<?php } ?>
  	</h1>

  	<h1>1. Pre-trip consultant:</h1>
  	<table class="table">
	    <tbody>
	      <tr>
	        <td>Knowledge</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['knowledge_consultant'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Timely response</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['timely_response'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Comment</td>
	        <td><?= $feedback['comment_further'] ?></td>
	      </tr>

	    </tbody>
  	</table>

  	<h1>2. Your tour guide:</h1>
  	<table class="table">
	    <tbody>
	      <tr>
	        <td>Enthusiasm</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['enthusiasm'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Organizing skill</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['organizing_skill'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Communication</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['communication'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Knowledge</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['knowledge_guide'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Comment</td>
	        <td><?= $feedback['comment_guide'] ?></td>
	      </tr>

	    </tbody>
  	</table>

  	<h1>3. Accommodation:</h1>
  	<table class="table">
	    <tbody>
	      <tr>
	        <td>Star</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['accommodation'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Comment</td>
	        <td><?= $feedback['comment_accommodation'] ?></td>
	      </tr>
	    </tbody>
  	</table>

  	<h1>4. Trip itinerary:</h1>
  	<table class="table">
	    <tbody>
	      <tr>
	        <td>Star</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['itinerary'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Comment</td>
	        <td><?= $feedback['comment_itinerary'] ?></td>
	      </tr>
	    </tbody>
  	</table>

  	<h1>5. Included meals:</h1>
  	<table class="table">
	    <tbody>
	      <tr>
	        <td>Star</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['included_meals'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Comment</td>
	        <td><?= $feedback['comment_meals'] ?></td>
	      </tr>
	    </tbody>
  	</table>

  	<h1>6. Transportation:</h1>
  	<table class="table">
	    <tbody>
	      <tr>
	        <td>Star</td>
	        <td>
	        	<?php for ($i=0;$i<$feedback['transportation'];$i++) { ?>
	        		<i class="fa fa-star" aria-hidden="true"></i>
	        	<?php } ?>
	        </td>
	      </tr>
	      <tr>
	        <td>Comment</td>
	        <td><?= $feedback['comment_transportation'] ?></td>
	      </tr>
	    </tbody>
  	</table>

  	<h1>Your other comments:</h1>
  	<table class="table">
	    <tbody>
	      <tr>
	        <td>Comment</td>
	        <td><?= $feedback['comment'] ?></td>
	      </tr>
	    </tbody>
  	</table>
</div>