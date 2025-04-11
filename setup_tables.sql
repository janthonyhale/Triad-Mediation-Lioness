DROP TABLE IF EXISTS  `e4447g40733_globals`;SELECT 1;CREATE TABLE `e4447g40733_globals` (
                  `name` varchar(36) NOT NULL,
                  `value` TEXT NOT NULL
                ) CHARACTER SET utf8;SELECT 1;INSERT INTO `e4447g40733_globals` (`name`, `value`) VALUES ('compiled', '1744359927'),('active', '1'),('testMode', '1'),('totalPlayers', '100000'),('groupSize', '3'),('numberPeriods', '1'),('loopStart', '438340'),('loopEnd', '438341'),('participationFee', '1'),('exchangeRate', '0.01'),('reEnter', '0'),('dropoutHandling', '2'),('sortableMatching', '2'),('message0', '&lt;b&gt;This HIT is currently offline. You cannot participate at this time.&lt;/b&gt;&lt;br&gt;&lt;br&gt;
&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;@D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;'),('message1', '&lt;b&gt;According to our records, your device has already been connected to the server during this session. &lt;br&gt;
                Participants are only allowed to enter a session once. Thank you for your understanding.&lt;/b&gt;&lt;br&gt;&lt;br&gt;
&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;#D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;'),('message2', '&lt;b&gt;We have sufficient participants for this HIT. &lt;br&gt;Unfortunately, you cannot participate at this time. &lt;br&gt;&lt;br&gt;
                Thank you for your understanding.&lt;/b&gt;&lt;br&gt;&lt;br&gt;
&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;%D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;'),('message3', '&lt;b&gt;You are currently not logged in. You cannot participate in the HIT.&lt;/b&gt;&lt;br&gt;&lt;br&gt;
&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;&amp;amp;D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;'),('message4', '&lt;b&gt;Unfortunately, this HIT was terminated for a technical reason! &lt;br&gt;&lt;br&gt;&lt;br&gt;
                You cannot continue. &lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;/b&gt;
&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;*D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;
                You will receive your guaranteed participation fee of $ $participationFee$.
                To collect your earnings, please fill out this random code on MTurk.
                &lt;br&gt;&lt;br&gt;&lt;b&gt;$randomid$&lt;/b&gt;.
                &lt;br&gt;
                Once you have filled out this code, you can close this window.
                Thank you for your participation.'),('message5', '&lt;b&gt; You did not make a decision before the time was up. &lt;br&gt;&lt;br&gt; You have been removed from the HIT.&lt;/b&gt; &lt;br&gt;&lt;br&gt;
&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;+D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;'),('message6', '&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;!D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;'),('message7', '&lt;b&gt;As indicated in our HIT text on MTurk, our HIT does &lt;b&gt;not&lt;/b&gt; support Microsoft Internet Explorer. &lt;br&gt;
                         Please return this HIT. &lt;/b&gt;&lt;br&gt;&lt;br&gt;
&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;~D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;
                         &lt;br&gt;
                         We apologise for any inconvenience caused.'),('message8', '&lt;b&gt;You did not answer the quiz correctly and were excluded from further participation&lt;/b&gt;&lt;br&gt;&lt;br&gt;
&lt;p&gt;Please copy the following code. Return to the browser tab where you started the experiment and paste this CODE into the box provided to continue and receive full credit&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Completion Code: &lt;span id=&quot;copyText&quot;&gt;?D-$randomid$&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
    &lt;button type=&quot;button&quot; id=&quot;copyButton&quot;&gt;Click to Copy&lt;/button&gt;

    &lt;script&gt;
        // Function to copy text from the button
        function copyToClipboard() {
            var copyText = document.getElementById(&quot;copyText&quot;);
            var textArea = document.createElement(&quot;textarea&quot;);

            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.value = textArea.value.replace(&quot;document.write(randomid)&quot;, &quot;&quot;)
textArea.select();
            document.execCommand(&quot;copy&quot;);
            document.body.removeChild(textArea);

            alert(&quot;Code has been copied to the clipboard: &quot; + textArea.value);
        }

        // Add a click event listener to the button
        document.getElementById(&quot;copyButton&quot;).addEventListener(&quot;click&quot;, copyToClipboard);
    &lt;/script&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once you have entered the code, you may safely close this tab.&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;
&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');SELECT 1;ALTER TABLE e4447g40733_globals ADD PRIMARY KEY(`name`);SELECT 1;DROP TABLE IF EXISTS `e4447g40733_decisions`;SELECT 1;CREATE TABLE IF NOT EXISTS `e4447g40733_decisions` (
                  `playerNr` int(11),
                  `groupNr` int(11),
                  `subjectNr` int(11),
                  `period` int(11)
                  ,`chat_box_content`   TEXT,`mediate`   TEXT,`chat_box_content_chatnotification`   TEXT,`fullChat`   TEXT,`final_result`   TEXT,`other_lost_connect`   TEXT,`time_438338` float ,`time_438339` float ,`time_438340` float ,`time_438341` float ,`time_438342` float ) CHARACTER SET utf8;SELECT 1;ALTER TABLE e4447g40733_decisions ADD PRIMARY KEY( `playerNr`, `period`);SELECT 1;DROP TABLE IF EXISTS `e4447g40733_logEvents`;SELECT 1;CREATE TABLE IF NOT EXISTS `e4447g40733_logEvents` (
                  `eventNr` int(11) NOT NULL AUTO_INCREMENT,
                  `groupNr` int(11) NOT NULL,
                  `playerNr` int(11) NOT NULL,
                  `timeEvent` varchar(256) NOT NULL,
                  `event` varchar(256) NOT NULL,
                  PRIMARY KEY(eventNr)
                ) CHARACTER SET utf8;SELECT 1;DROP TABLE IF EXISTS `e4447g40733_core`;SELECT 1;CREATE TABLE IF NOT EXISTS `e4447g40733_core` (
                      `playerNr` int(11) NOT NULL AUTO_INCREMENT,                   
                      `groupNr` int(11) NOT NULL,
                      `subjectNr` int(11) NOT NULL,
                      `groupNrStart` int(11) NOT NULL,
                      `currentGroupSize` int(11) NOT NULL,
                      `period` int(11) NOT NULL,
                      `onPage` varchar(30) NOT NULL,
                      `connected` boolean,
                      `tStart` int(11) NOT NULL,
                      `lastActionTime` int(11) NOT NULL,
                      `ipaddress` varchar(99) NOT NULL,
                      `ipaddress_part` varchar(15) NOT NULL,
                      `location` varchar(40) NULL,
                      `waitMore` int(11) NOT NULL,
                      `lobbyReady` boolean,
                      `enterLobby` INT(11),
                      `role` INT(11),`wait_438338ready` boolean,`wait_438339ready` boolean,`wait_438340ready` boolean,`wait_438341ready` boolean,`wait_438342ready` boolean,`wait_lastInPeriod` boolean,
                      `periodReady` boolean,
                      `leftExperiment` boolean,
                      `experimentTerminated` boolean,
                      `groupAborted` boolean,
                      PRIMARY KEY (playerNr)
                    ) CHARACTER SET utf8;SELECT 1;DROP TABLE IF EXISTS `e4447g40733_session`;SELECT 1;CREATE TABLE IF NOT EXISTS `e4447g40733_session` (
                  `playerNr` int(11) NOT NULL,
                  `randomid` VARCHAR(256) NOT NULL,
                  `randomidNotPlayed` VARCHAR(256)   NOT NULL,
                  `relevantRandomid` varchar(256) NOT NULL,
                  `externalID` varchar(256) NULL,
                  `participationAmount` decimal(11,2) NOT NULL,
                  `bonusAmount` decimal(11,2) NOT NULL,
                  `totalEarnings` decimal(11,2) NOT NULL,`quizFail` int(11) DEFAULT 0,
                    PRIMARY KEY (playerNr)
                  ) CHARACTER SET utf8;SELECT 1;TRUNCATE `e4447g40733_session`;SELECT 1;