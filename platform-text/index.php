<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Platform Text";
	$pageKeywords	= "text, editor, Java, JDT, jdt, development, tools, ide, Eclipse";
	$pageAuthor		= "The Text Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

ob_start();
?>
		
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<div class="homeitem3col">
			<h3>About Platform Text</h3>
				<p>
				Platform Text provides the basic building blocks for text
				and text editors within Eclipse and contributes the Eclipse default text
				editor. It consists of five parts:
				<ul>
					<li>
					The text infrastructure provides facilities for text manipulation, position
					management, and change notification.</li>
					
					<li>
					JFace Text provides UI components for editing and presenting text. It offers
					support for rule based styling, content completion, formatting, model reconciling,
					hover help, and vertical rulers.</li>
					
					<li>
					The text editor framework provides the abstract implementation of an Eclipse
					text editor.</li>
					
					<li>The File Buffers plug-in which introduces text file buffers for shared access to
					the content of a text file in form of an <tt>IDocument</tt> and and associated <tt>IAnnotationModel</tt>.
					</li>
					
					<li>A concrete editor implementation: the Eclipse default text editor.
					</li>
				</ul></p>
				<p>
				Editors built with this toolkit are for example the JDT Editor or the CDT
				Editor. Take a look at the <a href="http://www.eclipse.org/jdt/ui/screenCasts/index.php">JDT screen casts</a> to see some
				features like the new J2SE 5.0 editor support in action.</p>
		</div>
		
		<div class="homeitem3col">
		<a name="optional"></a>
			<h3>Optional Plug-ins</h3>
				<p>
				Those optional plug-ins are not part of the Eclipse SDK download:</p>
				<ul>
					<li><b>Secure Hovers (simple HTML) Add-on</b><p>
					    Since 3.2 Eclipse uses the SWT Browser widget to display HTML information in hovers. On some platforms
					    (e.g. Windows) this widget has all browser features enabled, e.g. it might execute scripts that are inside the HTML content
					    (see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=228608">bug 228608</a> for details). Those who want to avoid this potential (but minimal) risk can download and install this add-on plug-in
					    which disables the Browser widget and displays the hovers as simple HTML.
					    <p>
					    To install simply <a href="downloads/org.eclipse.ui.editors.bugzilla_1.0.0.200805281136.jar">download</a> 
					    the plug-in and save it into the <code><install_dir>/plugins</code> (3.2.x - 3.3.x) or <code><install_dir>/dropins</code> (3.4) subfolder.</p>
					</li>
				</ul></p>
		</div>
		
		<div class="homeitem3col">
			<h3>Development Resources</h3>
			<p>
			The <a href="development/dev.php">Development Resources</a> show how to use Platform Text components.
		</div>
		
		
		<div class="homeitem3col">
			<h3>What's Happening?</h3>
		      <h4> <a NAME="Milestone_Planning"></a>3.4 Development</h4>
				<p>
		      <ul>
		        <li> The 3.4 plan is posted <a href="3.4/plan.php#Overall_Planning">here</a>.</li>
		        <li> The plan for the next milestone is posted <a href="3.4/plan.php#Milestone_Planning">here</a>.</li>
		        <li>The original plans for previous milestones can be found <a href="3.4/previous_plans.php#Milestone_Planning">here</a>.</li>
		      </ul></p>
		      
		      <h4> <a NAME="Maintenance_Planning"></a>3.3 Maintenance</h4>
		      <p>Information about 3.3 maintenance releases can be found <a href="http://wiki.eclipse.org/Europa_Simultaneous_Release#Coordinated_Maintenance">here</a>.</p>

		      <h4> <a NAME="Releases"></a>Previous Releases</h4>
		      <p>Information about previous releases can be found <a href="releases.html">here</a>.</p>
		</div>
		
		
		<div class="homeitem3col">
			<h3>Get Involved!</h3>
			<p>
				If you are interested in participating in the development of the Platform
				Text component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/platform-text-dev">platform-text-dev@eclipse.org</a>.
				Chat with people there about your problems and interests, and find out
				what you can do to help.
			</p>
	      <p>For more detailed information, check out the <a href="development/dev.php">Development Resources</a>.</p>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
