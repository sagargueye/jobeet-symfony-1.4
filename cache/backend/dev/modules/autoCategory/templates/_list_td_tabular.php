<br />
<font size='1'><table class='xdebug-error xe-deprecated' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfToolkit.class.php on line <i>362</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0004</td><td bgcolor='#eeeeec' align='right'>239912</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\jobeetHome\web\backend_dev.php' bgcolor='#eeeeec'>...\backend_dev.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1164</td><td bgcolor='#eeeeec' align='right'>6610568</td><td bgcolor='#eeeeec'>sfContext->dispatch(  )</td><td title='C:\wamp64\www\jobeetHome\web\backend_dev.php' bgcolor='#eeeeec'>...\backend_dev.php<b>:</b>13</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.1164</td><td bgcolor='#eeeeec' align='right'>6610832</td><td bgcolor='#eeeeec'>sfFrontWebController->dispatch(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfContext.class.php' bgcolor='#eeeeec'>...\sfContext.class.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1174</td><td bgcolor='#eeeeec' align='right'>6629160</td><td bgcolor='#eeeeec'>sfController->forward(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\controller\sfFrontWebController.class.php' bgcolor='#eeeeec'>...\sfFrontWebController.class.php<b>:</b>48</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>6629680</td><td bgcolor='#eeeeec'>sfConfigCache->import(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\controller\sfController.class.php' bgcolor='#eeeeec'>...\sfController.class.php<b>:</b>186</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>6629680</td><td bgcolor='#eeeeec'>sfConfigCache->checkConfig(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>249</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1190</td><td bgcolor='#eeeeec' align='right'>6630648</td><td bgcolor='#eeeeec'>sfConfigCache->callHandler(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>197</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1263</td><td bgcolor='#eeeeec' align='right'>7102416</td><td bgcolor='#eeeeec'>sfGeneratorConfigHandler->execute(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>108</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1390</td><td bgcolor='#eeeeec' align='right'>7373472</td><td bgcolor='#eeeeec'>sfGeneratorConfigHandler::getContent(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfGeneratorConfigHandler.class.php' bgcolor='#eeeeec'>...\sfGeneratorConfigHandler.class.php<b>:</b>75</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1390</td><td bgcolor='#eeeeec' align='right'>7373504</td><td bgcolor='#eeeeec'>sfGeneratorManager->generate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfGeneratorConfigHandler.class.php' bgcolor='#eeeeec'>...\sfGeneratorConfigHandler.class.php<b>:</b>82</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.1407</td><td bgcolor='#eeeeec' align='right'>7587672</td><td bgcolor='#eeeeec'>sfModelGenerator->generate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php' bgcolor='#eeeeec'>...\sfGeneratorManager.class.php<b>:</b>113</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.2364</td><td bgcolor='#eeeeec' align='right'>10188896</td><td bgcolor='#eeeeec'>sfGenerator->generatePhpFiles(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php' bgcolor='#eeeeec'>...\sfModelGenerator.class.php<b>:</b>61</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.4302</td><td bgcolor='#eeeeec' align='right'>10215128</td><td bgcolor='#eeeeec'>sfGenerator->evalTemplate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGenerator.class.php' bgcolor='#eeeeec'>...\sfGenerator.class.php<b>:</b>67</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.4329</td><td bgcolor='#eeeeec' align='right'>10237072</td><td bgcolor='#eeeeec'>require( <font color='#00bb00'>'C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\admin\template\templates\_list_td_tabular.php'</font> )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGenerator.class.php' bgcolor='#eeeeec'>...\sfGenerator.class.php<b>:</b>84</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.4331</td><td bgcolor='#eeeeec' align='right'>10237544</td><td bgcolor='#eeeeec'>sfModelGenerator->renderField(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\admin\template\templates\_list_td_tabular.php' bgcolor='#eeeeec'>...\_list_td_tabular.php<b>:</b>8</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.4331</td><td bgcolor='#eeeeec' align='right'>10237592</td><td bgcolor='#eeeeec'>sfDoctrineGenerator->getColumnGetter(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php' bgcolor='#eeeeec'>...\sfModelGenerator.class.php<b>:</b>258</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>1.4331</td><td bgcolor='#eeeeec' align='right'>10237672</td><td bgcolor='#eeeeec'>sfInflector::camelize(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineGenerator.class.php' bgcolor='#eeeeec'>...\sfDoctrineGenerator.class.php<b>:</b>100</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>1.4331</td><td bgcolor='#eeeeec' align='right'>10238248</td><td bgcolor='#eeeeec'>sfToolkit::pregtr(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfInflector.class.php' bgcolor='#eeeeec'>...\sfInflector.class.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>1.4332</td><td bgcolor='#eeeeec' align='right'>10239192</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.preg-replace' target='_new'>preg_replace</a>
(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfToolkit.class.php' bgcolor='#eeeeec'>...\sfToolkit.class.php<b>:</b>362</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-deprecated' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfToolkit.class.php on line <i>362</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0004</td><td bgcolor='#eeeeec' align='right'>239912</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\jobeetHome\web\backend_dev.php' bgcolor='#eeeeec'>...\backend_dev.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1164</td><td bgcolor='#eeeeec' align='right'>6610568</td><td bgcolor='#eeeeec'>sfContext->dispatch(  )</td><td title='C:\wamp64\www\jobeetHome\web\backend_dev.php' bgcolor='#eeeeec'>...\backend_dev.php<b>:</b>13</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.1164</td><td bgcolor='#eeeeec' align='right'>6610832</td><td bgcolor='#eeeeec'>sfFrontWebController->dispatch(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfContext.class.php' bgcolor='#eeeeec'>...\sfContext.class.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1174</td><td bgcolor='#eeeeec' align='right'>6629160</td><td bgcolor='#eeeeec'>sfController->forward(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\controller\sfFrontWebController.class.php' bgcolor='#eeeeec'>...\sfFrontWebController.class.php<b>:</b>48</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>6629680</td><td bgcolor='#eeeeec'>sfConfigCache->import(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\controller\sfController.class.php' bgcolor='#eeeeec'>...\sfController.class.php<b>:</b>186</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>6629680</td><td bgcolor='#eeeeec'>sfConfigCache->checkConfig(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>249</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1190</td><td bgcolor='#eeeeec' align='right'>6630648</td><td bgcolor='#eeeeec'>sfConfigCache->callHandler(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>197</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1263</td><td bgcolor='#eeeeec' align='right'>7102416</td><td bgcolor='#eeeeec'>sfGeneratorConfigHandler->execute(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>108</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1390</td><td bgcolor='#eeeeec' align='right'>7373472</td><td bgcolor='#eeeeec'>sfGeneratorConfigHandler::getContent(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfGeneratorConfigHandler.class.php' bgcolor='#eeeeec'>...\sfGeneratorConfigHandler.class.php<b>:</b>75</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1390</td><td bgcolor='#eeeeec' align='right'>7373504</td><td bgcolor='#eeeeec'>sfGeneratorManager->generate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfGeneratorConfigHandler.class.php' bgcolor='#eeeeec'>...\sfGeneratorConfigHandler.class.php<b>:</b>82</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.1407</td><td bgcolor='#eeeeec' align='right'>7587672</td><td bgcolor='#eeeeec'>sfModelGenerator->generate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php' bgcolor='#eeeeec'>...\sfGeneratorManager.class.php<b>:</b>113</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.2364</td><td bgcolor='#eeeeec' align='right'>10188896</td><td bgcolor='#eeeeec'>sfGenerator->generatePhpFiles(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php' bgcolor='#eeeeec'>...\sfModelGenerator.class.php<b>:</b>61</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.4302</td><td bgcolor='#eeeeec' align='right'>10215128</td><td bgcolor='#eeeeec'>sfGenerator->evalTemplate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGenerator.class.php' bgcolor='#eeeeec'>...\sfGenerator.class.php<b>:</b>67</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.4329</td><td bgcolor='#eeeeec' align='right'>10237072</td><td bgcolor='#eeeeec'>require( <font color='#00bb00'>'C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\admin\template\templates\_list_td_tabular.php'</font> )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGenerator.class.php' bgcolor='#eeeeec'>...\sfGenerator.class.php<b>:</b>84</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.4331</td><td bgcolor='#eeeeec' align='right'>10237544</td><td bgcolor='#eeeeec'>sfModelGenerator->renderField(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\admin\template\templates\_list_td_tabular.php' bgcolor='#eeeeec'>...\_list_td_tabular.php<b>:</b>8</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.4331</td><td bgcolor='#eeeeec' align='right'>10237592</td><td bgcolor='#eeeeec'>sfDoctrineGenerator->getColumnGetter(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php' bgcolor='#eeeeec'>...\sfModelGenerator.class.php<b>:</b>258</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>1.4331</td><td bgcolor='#eeeeec' align='right'>10237672</td><td bgcolor='#eeeeec'>sfInflector::camelize(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineGenerator.class.php' bgcolor='#eeeeec'>...\sfDoctrineGenerator.class.php<b>:</b>100</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>1.4331</td><td bgcolor='#eeeeec' align='right'>10238248</td><td bgcolor='#eeeeec'>sfToolkit::pregtr(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfInflector.class.php' bgcolor='#eeeeec'>...\sfInflector.class.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>1.4332</td><td bgcolor='#eeeeec' align='right'>10239192</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.preg-replace' target='_new'>preg_replace</a>
(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfToolkit.class.php' bgcolor='#eeeeec'>...\sfToolkit.class.php<b>:</b>362</td></tr>
</table></font>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo link_to($jobeet_category->getName(), 'jobeet_category_edit', $jobeet_category) ?>
</td>
<br />
<font size='1'><table class='xdebug-error xe-deprecated' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfToolkit.class.php on line <i>362</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0004</td><td bgcolor='#eeeeec' align='right'>239912</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\jobeetHome\web\backend_dev.php' bgcolor='#eeeeec'>...\backend_dev.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1164</td><td bgcolor='#eeeeec' align='right'>6610568</td><td bgcolor='#eeeeec'>sfContext->dispatch(  )</td><td title='C:\wamp64\www\jobeetHome\web\backend_dev.php' bgcolor='#eeeeec'>...\backend_dev.php<b>:</b>13</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.1164</td><td bgcolor='#eeeeec' align='right'>6610832</td><td bgcolor='#eeeeec'>sfFrontWebController->dispatch(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfContext.class.php' bgcolor='#eeeeec'>...\sfContext.class.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1174</td><td bgcolor='#eeeeec' align='right'>6629160</td><td bgcolor='#eeeeec'>sfController->forward(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\controller\sfFrontWebController.class.php' bgcolor='#eeeeec'>...\sfFrontWebController.class.php<b>:</b>48</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>6629680</td><td bgcolor='#eeeeec'>sfConfigCache->import(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\controller\sfController.class.php' bgcolor='#eeeeec'>...\sfController.class.php<b>:</b>186</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>6629680</td><td bgcolor='#eeeeec'>sfConfigCache->checkConfig(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>249</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1190</td><td bgcolor='#eeeeec' align='right'>6630648</td><td bgcolor='#eeeeec'>sfConfigCache->callHandler(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>197</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1263</td><td bgcolor='#eeeeec' align='right'>7102416</td><td bgcolor='#eeeeec'>sfGeneratorConfigHandler->execute(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>108</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1390</td><td bgcolor='#eeeeec' align='right'>7373472</td><td bgcolor='#eeeeec'>sfGeneratorConfigHandler::getContent(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfGeneratorConfigHandler.class.php' bgcolor='#eeeeec'>...\sfGeneratorConfigHandler.class.php<b>:</b>75</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1390</td><td bgcolor='#eeeeec' align='right'>7373504</td><td bgcolor='#eeeeec'>sfGeneratorManager->generate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfGeneratorConfigHandler.class.php' bgcolor='#eeeeec'>...\sfGeneratorConfigHandler.class.php<b>:</b>82</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.1407</td><td bgcolor='#eeeeec' align='right'>7587672</td><td bgcolor='#eeeeec'>sfModelGenerator->generate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php' bgcolor='#eeeeec'>...\sfGeneratorManager.class.php<b>:</b>113</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.2364</td><td bgcolor='#eeeeec' align='right'>10188896</td><td bgcolor='#eeeeec'>sfGenerator->generatePhpFiles(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php' bgcolor='#eeeeec'>...\sfModelGenerator.class.php<b>:</b>61</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.4302</td><td bgcolor='#eeeeec' align='right'>10215128</td><td bgcolor='#eeeeec'>sfGenerator->evalTemplate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGenerator.class.php' bgcolor='#eeeeec'>...\sfGenerator.class.php<b>:</b>67</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.4329</td><td bgcolor='#eeeeec' align='right'>10237072</td><td bgcolor='#eeeeec'>require( <font color='#00bb00'>'C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\admin\template\templates\_list_td_tabular.php'</font> )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGenerator.class.php' bgcolor='#eeeeec'>...\sfGenerator.class.php<b>:</b>84</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10237616</td><td bgcolor='#eeeeec'>sfModelGenerator->renderField(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\admin\template\templates\_list_td_tabular.php' bgcolor='#eeeeec'>...\_list_td_tabular.php<b>:</b>8</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10237664</td><td bgcolor='#eeeeec'>sfDoctrineGenerator->getColumnGetter(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php' bgcolor='#eeeeec'>...\sfModelGenerator.class.php<b>:</b>258</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10237744</td><td bgcolor='#eeeeec'>sfInflector::camelize(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineGenerator.class.php' bgcolor='#eeeeec'>...\sfDoctrineGenerator.class.php<b>:</b>100</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10238320</td><td bgcolor='#eeeeec'>sfToolkit::pregtr(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfInflector.class.php' bgcolor='#eeeeec'>...\sfInflector.class.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10239264</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.preg-replace' target='_new'>preg_replace</a>
(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfToolkit.class.php' bgcolor='#eeeeec'>...\sfToolkit.class.php<b>:</b>362</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-deprecated' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfToolkit.class.php on line <i>362</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0004</td><td bgcolor='#eeeeec' align='right'>239912</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\jobeetHome\web\backend_dev.php' bgcolor='#eeeeec'>...\backend_dev.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.1164</td><td bgcolor='#eeeeec' align='right'>6610568</td><td bgcolor='#eeeeec'>sfContext->dispatch(  )</td><td title='C:\wamp64\www\jobeetHome\web\backend_dev.php' bgcolor='#eeeeec'>...\backend_dev.php<b>:</b>13</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.1164</td><td bgcolor='#eeeeec' align='right'>6610832</td><td bgcolor='#eeeeec'>sfFrontWebController->dispatch(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfContext.class.php' bgcolor='#eeeeec'>...\sfContext.class.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1174</td><td bgcolor='#eeeeec' align='right'>6629160</td><td bgcolor='#eeeeec'>sfController->forward(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\controller\sfFrontWebController.class.php' bgcolor='#eeeeec'>...\sfFrontWebController.class.php<b>:</b>48</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>6629680</td><td bgcolor='#eeeeec'>sfConfigCache->import(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\controller\sfController.class.php' bgcolor='#eeeeec'>...\sfController.class.php<b>:</b>186</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1175</td><td bgcolor='#eeeeec' align='right'>6629680</td><td bgcolor='#eeeeec'>sfConfigCache->checkConfig(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>249</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1190</td><td bgcolor='#eeeeec' align='right'>6630648</td><td bgcolor='#eeeeec'>sfConfigCache->callHandler(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>197</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1263</td><td bgcolor='#eeeeec' align='right'>7102416</td><td bgcolor='#eeeeec'>sfGeneratorConfigHandler->execute(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfConfigCache.class.php' bgcolor='#eeeeec'>...\sfConfigCache.class.php<b>:</b>108</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1390</td><td bgcolor='#eeeeec' align='right'>7373472</td><td bgcolor='#eeeeec'>sfGeneratorConfigHandler::getContent(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfGeneratorConfigHandler.class.php' bgcolor='#eeeeec'>...\sfGeneratorConfigHandler.class.php<b>:</b>75</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1390</td><td bgcolor='#eeeeec' align='right'>7373504</td><td bgcolor='#eeeeec'>sfGeneratorManager->generate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\config\sfGeneratorConfigHandler.class.php' bgcolor='#eeeeec'>...\sfGeneratorConfigHandler.class.php<b>:</b>82</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.1407</td><td bgcolor='#eeeeec' align='right'>7587672</td><td bgcolor='#eeeeec'>sfModelGenerator->generate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php' bgcolor='#eeeeec'>...\sfGeneratorManager.class.php<b>:</b>113</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.2364</td><td bgcolor='#eeeeec' align='right'>10188896</td><td bgcolor='#eeeeec'>sfGenerator->generatePhpFiles(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php' bgcolor='#eeeeec'>...\sfModelGenerator.class.php<b>:</b>61</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.4302</td><td bgcolor='#eeeeec' align='right'>10215128</td><td bgcolor='#eeeeec'>sfGenerator->evalTemplate(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGenerator.class.php' bgcolor='#eeeeec'>...\sfGenerator.class.php<b>:</b>67</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.4329</td><td bgcolor='#eeeeec' align='right'>10237072</td><td bgcolor='#eeeeec'>require( <font color='#00bb00'>'C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\admin\template\templates\_list_td_tabular.php'</font> )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfGenerator.class.php' bgcolor='#eeeeec'>...\sfGenerator.class.php<b>:</b>84</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10237616</td><td bgcolor='#eeeeec'>sfModelGenerator->renderField(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\admin\template\templates\_list_td_tabular.php' bgcolor='#eeeeec'>...\_list_td_tabular.php<b>:</b>8</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10237664</td><td bgcolor='#eeeeec'>sfDoctrineGenerator->getColumnGetter(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php' bgcolor='#eeeeec'>...\sfModelGenerator.class.php<b>:</b>258</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>17</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10237744</td><td bgcolor='#eeeeec'>sfInflector::camelize(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineGenerator.class.php' bgcolor='#eeeeec'>...\sfDoctrineGenerator.class.php<b>:</b>100</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>18</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10238320</td><td bgcolor='#eeeeec'>sfToolkit::pregtr(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfInflector.class.php' bgcolor='#eeeeec'>...\sfInflector.class.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>19</td><td bgcolor='#eeeeec' align='center'>1.6914</td><td bgcolor='#eeeeec' align='right'>10239264</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.preg-replace' target='_new'>preg_replace</a>
(  )</td><td title='C:\wamp64\www\jobeetHome\lib\vendor\symfony\lib\util\sfToolkit.class.php' bgcolor='#eeeeec'>...\sfToolkit.class.php<b>:</b>362</td></tr>
</table></font>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $jobeet_category->getSlug() ?>
</td>
