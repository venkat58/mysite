<?phpif ( !is_admin() ) {     wp_die( __( 'You do not have sufficient permissions to access this page.' ) );}?>			<h3>How to generate your Google Drive API Key.</h3>				<p>			1. Go to https://code.google.com/apis/console/, sign in with your google account. Click Create Project. 			<!--<br /><img src="https://docs.google.com/uc?id=0B4hkh-PEv0ZZb1J1aV9QX3NiZ0U&export=view">-->			<br /><img src="<?php echo plugins_url( '/images/documentation/docu-1.jpg', __FILE__ );?>">		</p>		<p>			2. Now click Drive API button to <b>enabling</b> Drive API Services.			<!--<br /><img src="https://docs.google.com/uc?id=0B4hkh-PEv0ZZRVJzZHFENFA3bXM&export=view">-->			<br /><img src="<?php echo plugins_url( '/images/documentation/docu-2.jpg', __FILE__ );?>">		</p>		<p>			3. On the left pane of your screen click 'Credentials', click 'CREATE NEW CLIENT ID'. On the popup, pick <b>Service Account</b>, cick 'Create Client ID'.			<!--<br /><img src="https://docs.google.com/uc?id=0B4hkh-PEv0ZZV1VZaXlxZkdLSFU&export=view">-->			<br /><img src="<?php echo plugins_url( '/images/documentation/docu-3.jpg', __FILE__ );?>">		</p>		<p>			4. Your *.-privatekey.p12 file will automaticaly downloaded, save it.		</p>		<p>			5. Now you have a Client ID, Email address (Service Account Name), and *.-privatekey.p12 file that recently downloaded.		</p>		<p>			6. Upload your *.-privatekey.p12 file into your web host and remember its Url path.		</p>		<p><br /></p>		<p>			File Permissions uploded by this plugin are automatically set to public, which everybody can view or download your files.		</p>		<p>			For more info, please visit https://developers.google.com/drive/web/		</p>