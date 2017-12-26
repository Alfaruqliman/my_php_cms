<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			<?php echo navigation($sel_subject, $sel_page); ?>
			</td>
			<td id="page">
				<h2>Adding New Page</h2>
				<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
				<?php if (!empty($errors)) { display_errors($errors); } ?>
				<form action="create_page.php?subj=<?php echo $sel_subject['id']; ?>" method="post">
					<?php $new_page = true; ?>
					<?php include "page_form.php" ?>
					<input type="submit" value="Create Page" />
			&nbsp;&nbsp;
			<a href="edit_subject.php?subj=<?php echo $sel_subject['id'];
			?>">Cancel</a>
				</form>
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>