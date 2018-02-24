<?php
	
/*
	Question2Answer 1.2.1 (c) 2010, Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: 1.2.1
	Date: 2010-07-29 03:54:35 GMT
	Description: Language phrases for email notifications


	This software is free to use and modify for public websites, so long as a
	link to http://www.question2answer.org/ is displayed on each page. It may
	not be redistributed or resold, nor may any works derived from it.
	
	More about this license: http://www.question2answer.org/license.php


	THIS SOFTWARE IS PROVIDED "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
	INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
	AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL
	THE COPYRIGHT HOLDER BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
	SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
	TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
	PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
	LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
	NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
	SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

	return array(
		'a_commented_body' => "La tua risposta su ^site_title ha ricevuto un commento da ^c_handle:\n\n^open^c_content^close\n\nLa tua risposta:\n\n^open^c_context^close\n\nPuoi rispondere aggiungendo un tuo commento:\n\n^url\n\nGrazie,\n^site_title",
		'flagged_body' => "Un messaggio scritto da ^p_handle ha ricevuto ^flags:\n\n^open^p_context^close\n\nClicca sotto per vedere il messaggio:\n\n^url\n\n\nClicca sotto per vedere tutte le segnalazioni:\n\n^a_url\n\n\nGrazie,\n\n^site_title",
		'a_followed_body' => "La tua risposta su ^site_title ha una nuova domanda correlata inserita da ^q_handle:\n\n^open^q_title^close\n\nLa tua risposta:\n\n^open^a_content^close\n\nClicca sul link sottostante per rispondere al nuovo quesito:\n\n^url\n\nGrazie,\n^site_title",
		'a_selected_body' => "Complimenti! La tua risposta su ^site_title è stata appena selezionata come risposta migliore da ^s_handle:\n\n^open^a_content^close\n\nIl quesito era:\n\n^open^q_title^close\n\nClicca sul link sottostante per visualizzare la risposta:\n\n^url\n\nGrazie,\n^site_title",
		'c_commented_body' => "Un nuovo commento scritto da ^c_handle è stato aggiunto dopo il tuo commento su ^site_title:\n\n^open^c_content^close\n\nLa discussione è la seguente:\n\n^open^c_context^close\n\nPuoi rispondere aggiungendo un nuovo commento:\n\n^url\n\nGrazie,\n^site_title",
		'q_answered_body' => "La tua domanda su ^site_title ha appena ricevuto una risposta scritta da ^a_handle:\n\n^open^a_content^close\n\nIl tuo quesito:\n\n^open^q_title^close\n\nSe ritieni che risposta sia corretta, puoi sceglierla come risposta migliore:\n\n^url\n\nGrazie,\n\n^site_title",		
		'q_posted_body' => "Una nuova domanda è stato posto su ^site_title da ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nClicca sul link sottostante per visualizzare il quesito:\n\n^url\n\nGrazie,\n\n^site_title",
		'q_commented_body' => "Il tuo quesito su ^site_title ha ricevuto un nuovo commento scritto da ^c_handle:\n\n^open^c_content^close\n\nIl tuo quesito:\n\n^open^c_context^close\n\nPuoi rispondere aggiungendo un tuo commento:\n\n^url\n\nGrazie,\n\n^site_title",		
		'a_commented_subject' => 'La tua risposta su ^site_title ha ricevuto un commento',
		'a_followed_subject' => 'La tua risposta su ^site_title ha un nuovo quesito correlato',
		'a_selected_subject' => 'La tua risposta su ^site_title è stata scelta come migliore!',
		'c_commented_subject' => 'Un nuovo commento è stato aggiunto su ^site_title',
		'confirm_body' => "Clicca sul sul link sottostante per confermare il tuo indirizzo email per ^site_title.\n\n^url\n\nCodice di conferma: ^code\n\n Grazie,\n^site_title",
		'confirm_subject' => '^site_title - Conferma indirizzo email',
		'feedback_body' => "Commenti:\n^message\n\nNome:\n^name\n\nEmail:\n^email\n\nPagina precedente:\n^previous\n\nUtente:\n^url\n\nIndirizzo IP:\n^ip\n\nBrowser:\n^browser",
		'feedback_subject' => '^ commento',
		'new_password_body' => "La tua password su ^site_title è qui sotto.\n\nPassword: ^password\n\nTi consigliamo di modificare la password non appena avrai effettuato il login.\n\nGrazie,\n^site_title\n^url",
		'new_password_subject' => '^site_title - La tua nuova password',
		'q_answered_subject' => 'Nuova risposta al tuo quesito su ^site_title',
		'q_commented_subject' => 'Il tuo quesito su ^site_title ha un nuovo commento',
		'q_posted_subject' => '^site_title ha una nuova domanda',
		'reset_body' => "Clicca sul link sottostante per ripristinare la password su ^site_title.\n\n^url\n\nIn alternativa, puoi inserire il codice sottostante nel campo fornito.\n\nCodice: ^code\n\nSe non hai richiesto il ripristino della password, ti preghiamo di ignorare questo messaggio.\n\nGrazie,\n^site_title",
		'reset_subject' => '^site_title - Ripristino password dimenticata',
		'welcome_body' => "Ti ringraziamo per esserti registrato su ^site_title.\n\n^custom^confirm\n\nLe tue credenziali di autenticazione sono le seguenti:\n\nUsername: ^handle\n\nEmail: ^email\nPassword: ^password\n\nTi preghiamo di conservare in maniera riservata queste informazioni per ogni utilizzo futuro.\n\nGrazie,\n\n^site_title\n^url",
		'welcome_confirm' => "Clicca qui sotto per confermare il tuo indirizzo email.\n\n^url\n\n",
		'welcome_subject' => 'Benvenuto su ^site_title!',
		'flagged_subject' => "^site_title ha un messaggio segnalato",
		'moderate_body' => "Un messaggio scritto da ^p_handle richiede la tua approvazione:\n\n^open^p_context^close\n\nClicca sotto per approvare o rifiutare il messaggio:\n\n^url\n\n\nClicca sotto per vedere tutti i messaggi in attesa di approvazione:\n\n^a_url\n\n\nGrazie,\n\n^site_title",
		'moderate_subject' => "^site_title moderazione",
		'private_message_body' => "Hai ricevuto un messaggio privato da ^f_handle su ^site_title:\n\n^open^message^close\n\n^moreGrazie,\n\n^site_title\n\n\nAccedi al tuo profilo per disabilitare i messaggi privati:\n^a_url",
		'private_message_info' => "Maggiori informazion su ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Clicca sotto per rispondere a ^f_handle con un messaggio privato:\n\n^url\n\n",
		'private_message_subject' => "Messaggio da ^f_handle su ^site_title",
		'to_handle_prefix' => "^,\n\n",
		'remoderate_body' => "Un messaggio modificato da ^p_handle richiede nuovamente la tua approvazione:\n\n^open^p_context^close\n\nClicca sotto per approvare o nascondere il messaggio modificato:\n\n^url\n\n\nClicca sotto per vedere tutti i messaggi in coda:\n\n^a_url\n\n\nGrazie,\n\n^site_title",
		'remoderate_subject' => '^site_title moderazione',		
	    'u_registered_body' => "Un nuovo utente si è registrato come ^u_handle.\n\nClicca sotto per vedere il suo profilo:\n\n^url\n\nGrazie,\n\n^site_title",
		'u_to_approve_body' => "Un nuovo utente si è registrato come ^u_handle.\n\nClicca sotto per attivare l'utente:\n\n^url\n\nClicca sotto per attivare gli utenti in attesa di approvazione:\n\n^a_url\n\nGrazie,\n\n^site_title",
		'u_registered_subject' => '^site_title nuovo utente registrato',
		'u_approved_body' => "Puoi vedere il tuo profilo utente qui:\n\n^url\n\nGrazie,\n\n^site_title",
		'u_approved_subject' => 'Il tuo account su ^site_title è stato attivato',
		'wall_post_subject' => 'Ha scritto un messaggio sulla tua bacheca su ^site_title',
		'wall_post_body' => "^f_handle ha scritto un messaggio sulla tua bacheca su ^site_title:\n\n^open^post^close\n\nPuoi rispondere al messaggio da questo link:\n\n^url\n\nGrazie,\n\n^site_title"
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
