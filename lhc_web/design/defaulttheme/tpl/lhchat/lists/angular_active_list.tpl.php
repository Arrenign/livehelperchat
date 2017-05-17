<ul class="list-unstyled fs12">				
      <li ng-repeat="chat in active_chats.list track by chat.id" ng-class="{'icon-user-away': chat.user_status_front == 2, 'icon-user-online': chat.user_status_front == 0}">
      	<span ng-if="chat.country_code != undefined"><img ng-src="<?php echo erLhcoreClassDesign::design('images/flags');?>/{{chat.country_code}}.png" alt="{{chat.country_name}}" title="{{chat.country_name}}" /></span>
      	<a class="material-icons" title="ID - {{chat.id}}" ng-click="lhc.previewChat(chat.id)" >info_outline</a><a class="right-action-hide material-icons" ng-click="lhc.startChat(chat.id,chat.nick)" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Add chat');?>">chat</a><a class="material-icons" ng-click="lhc.startChatNewWindow(chat.id,chat.nick)" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Open in a new window');?>">open_in_new</a>{{chat.nick}}, <small><i>{{chat.time_created_front}},</i>
      	</small> {{chat.department_name}} | {{chat.plain_user_name}}
      </li>					
</ul>
<p ng-show="active_chats.list.length == 0"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Empty...');?></p>