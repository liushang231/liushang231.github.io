*************************************公共引入说明***********************************************************

<{header}>       <include file="Common:header" />
<{top}>		<include file="Common:top" />
<{nav}>		<include file="Common:navigation" />
<{left}>	<include file="Common:left" />
<{share}>	<include file="Common:share" />
<{footer}>  <include file="Common:footer" />
<{footer_js}>  <include file="Common:footer_js" />

********************************************新闻//news//列表页面说明****************************************
==========================================================
<{$news1$}>
if(!empty($cat_img)){
	style="background: url(<{$cat_img}>) no-repeat center"

}
==========================================================
<{$news2$}>

<{$bread}>
==========================================================
<{$news3$}>
if(I('get.cid') == 77){

	<div class="col-md-3">
        <h2>捐赠</h2>
        <ul>
            <li class="active"><a href="<{:U('news',array('cid'=>77))}>"><span>新闻动态</span></a><em></em></li>
        </ul>
    </div>

}else{
	<include file="Common:left" />
}
==========================================================
<{$news4$}>

<{:U('news_img',array('cid'=>I('get.cid')))}>

==========================================================
<{$news5$}>

<volist name="news.list" id="vli">
    <li>
        <?php
            if(!empty($vli['link'])){
        ?>
        <a href="<{$vli.link}>">
            <?php
            }else{
        ?>
            <a href="<{:U('news_cont',array('id'=>$vli['id']))}>">
                <?php
            }
            if(I('get.cid') != 13){
        ?>

                <span class="date"><{$vli.addtime|date='Y.m.d',###}></span>
                <?php
            }
            ?>
                <p <?php if(I('get.cid') == 13){?> style="padding-left: 0;" <?php }?>><{$vli.title}></p>
            </a>
    </li>
</volist>
==========================================================
<{$news6$}>

if(!empty($news['list'])){
                        
    <{$news.page}>

    <form action="" method="post">
        <input type="text" class="search_input" name="p" id="pp" value="">
        <input type="button" value="GO" onClick="go()">
    </form>
                    
}
==========================================================                        
<{$news7$}>
<{:I('get.cid')}>


********************************************新闻详情页面说明//news_cont//*******************************************************

<{$news_cont1$}>

if(!empty($cat_img)){ 
	style="background: url(<{$cat_img}>) no-repeat center" 
}

==========================================================

<{$news_cont2$}>

<{$bread}>
==========================================================
<{$news_cont3$}>

if($page['tid'] == 77){
    <div class="col-md-3">
        <h2>捐赠</h2>
        <ul>
            <li class="active"><a href="<{:U('news',array('cid'=>77))}>"><span>新闻动态</span></a><em></em></li>
        </ul>
    </div>
}else{
        <div class="col-md-3">
            <h2><{$cate}></h2>
            <ul>
<?php
	$str = $page['tid'];
?>


                <volist name="leftMenu.child" id="vle">
                    <li <?php if($str == $vle['id']){ ?> class="active" <?php }?> ><a href="<{$vle.url}>"><span><{$vle.catname}></span></a><em></em></li>
                </volist>
            </ul>
        </div>
}
            

==========================================================
<{$news_cont4$}>
<{$page.title}>
==========================================================
<{$news_cont5$}>
<{$page.addtime|date='Y-m-d',###}>
==========================================================
<{$news_cont6$}>

$con = str_replace(array('<p style="text-indent:2em;">
                <br />
                </p>
                '),array(''),$page['content']);
$con = str_replace(array('<p>
                <br />
            </p>
                '),array(''),$page['content']);
<{$con}>
==========================================================
<{$news_cont7$}>

if($zong > 1){
	<div style="padding:20px 0 5px;border-top: 1px solid #f5e5e5;">
	if(!empty($prev)){
		<p style="margin:0;"><a href="<{:U('news_cont',array('id'=>$prev['id']))}>" style="display: inline-block;padding: 0 20px;color: #333;border-radius: 4px;">上一篇：<{$prev.title}></a></p>
	}else{                    
		<p style="margin:0;"><a href="javascript:void(0)" style="display: inline-block;padding: 0 20px;color: #333;border-radius: 4px;">上一篇：无</a></p>
    }
    <p style="margin:0;">
    	<a href="<?php if(!empty($next)){?><{:U('news_cont',array('id'=>$next['id']))}><?php }else{?>javascript:void(0)<?php }?>" style="display: inline-block;padding: 0 20px;color: #333;border-radius: 4px;">下一篇：<?php if(!empty($next)){?><{$next.title}><?php }else{?>无<?php }?>
    	</a>
    </p></div>
}

==========================================================

********************************************//donation//捐赠首页*******************************************************
<{$do1$}>

<volist name="adver" id="cc">
	<div class="swiper-slide"><a href="<{$cc.url}>" style="background: url(<{$cc.logo}>) no-repeat center top/cover;"></a></div>
</volist>

==========================================================
<{$do2$}>

<{$jz.catname}>
==========================================================
<{$do3$}>

<{$jz.content}>
==========================================================
<{$do4$}>

<volist name="hot" id="jj" key="key">
	<li <?php if($key == 1){?>class='active'<?php }?>>
		<{$jj.catname}>
	</li>
</volist>

==========================================================
<{$do5$}>
<volist name="hot" id="v" key="key">
	<div class="item" <?php if($key == 1){?>style="display: block;" <?php }?>>
		<?php
		$demo = 'demo-'.$key;
		?>
		<div class="fsbanner" id="<{$demo}>">
		    <volist name="v.child" id="vv">
		    <div style="background-image:url(<{$vv.thumb}>)"><a href="<{:U('jz_page',array('cid'=>$vv['id']))}>"><span class="name"><{$vv.catname}></span></a></div>
		    </volist>
		</div>
	</div>
</volist>
==========================================================
<{$do6$}>
<{:U('news',array('cid'=>77))}>
==========================================================
<{$do7$}>
<volist name="dt" id="ccc">
	<li>
		<a href="<{:U('news_cont',array('id'=>$ccc['id']))}>">
		    <div class="pic" style="background: url(<{$ccc.thumb}>) no-repeat center/cover;"></div>
		    <div class="txt">
		        <p><{$ccc.title}></p>
		        <span class="date"><{$ccc.addtime|date='Y.m.d',###}></span>
		    </div>
		</a>
	</li>
</volist>
==========================================================
<{$do9$}>
<{:U('news_tbmx',array('cid'=>78))}>
==========================================================
<{$do10$}>
<volist name="tb" id="ct">
	<tr>
		<td><{$ct.title}></td>
		<td><{$ct.description}></td>
		<td><{$ct.content}></td>
		<td><{$ct.addtime|date="Y-m",###}></td>
	</tr>
</volist>
==========================================================

********************************************//jz_page//*******************************************************
<{$jz_page1$}>
<{$bread}>
==========================================================
<{$jz_page2$}>
<{$leftMenu.catname}>
==========================================================
<{$jz_page3$}>



<volist name="leftMenu.child" id="v">
	if(empty($v['child'])){
		<li class="more_list"><a href="<{:U('jz_page',array('cid'=>$v['id']))}>"><span><{$v.catname}></span></a><em></em></li>
	}else{
		$str = I('get.cid');
		$arr = array_column($v['child'],'id');
		if(in_array($str,$arr)){
			$ac = 'active';
		}else{
			$ac = '';
		}
		<li class="<{$ac}> more_list"><a href="javascript:void(0);" class="unbindbtn"><span><{$v.catname}></span></a><em></em>
			<ul>
				<volist name="v.child" id="vv">
					if($str == $vv['id']){
						$co = 'color:#9a0000;';
						$acc = 'active';
					}else{
						$co = '';
						$acc = '';                                    
					}
					<li class='<{$acc}>'><a style="<{$co}>" href="<{:U('jz_page',array('cid'=>$vv['id']))}>"><{$vv.catname}></a><em></em></li>
				</volist>
			</ul>
		</li>
	}
</volist>


==========================================================
<{$jz_page4$}>
<{$page.catname}>
==========================================================
<{$jz_page5$}>
<{$page.content}>
==========================================================
<{$jz_page6$}>

if($page['jz_show'] != 1){
	<div class="donation_btn">
	我要捐赠
	</div>
}                         
==========================================================

********************************************//news_cont_jl//*******************************************************
<{$news_cont_jl1$}>

if(!empty($cat_img)){ 
 style="background: url(<{$cat_img}>) no-repeat center"
}
==========================================================
<{$news_cont_jl2$}>
<{:U('news_zzjs',array('cid'=>16))}>
==========================================================
<{$news_cont_jl3$}>
<{$cate}>
==========================================================
<{$news_cont_jl4$}>

$str = I('get.cid');
switch ($str){
    case 2:
        $str = 11;
        break;
    case 4:
        $str = 20;
        break;
    case 7:
        $str = 29;
        break;
}
<volist name="leftMenu.child" id="vle">
	<li <?php if($str == $vle['id']){ ?> class="active" <?php }?> ><a href="<{$vle.url}>"><span><{$vle.catname}></span></a><em></em></li>
</volist>
==========================================================
<{$news_cont_jl5$}>

if(!empty($page['Img'])){
	$str = substr($page['Img'],0,4);
	if($str != 'http'){
		$img_url = 'http://oa.bio.pku.edu.cn'.$page['Img'];
	}else{
		$img_url = $page['Img'];
	}
}else{
	$img_url = 'http://oa.bio.pku.edu.cn/images/zw.jpg';
}
<{$img_url}>
==========================================================
<{$news_cont_jl6$}>
<{$page.Name}>
==========================================================
<{$news_cont_jl7$}>
<{$page.Degree}>
==========================================================
<{$news_cont_jl8$}>

if(!empty($page['zr']) && $page['zr_1'] != "是"){
	<p>职&emsp;&emsp;称：<{$page.zr}></p>
}

if(!empty($page['bzr']) && $page['bzr_1'] != "是"){
	<p>传&emsp;&emsp;真：<{$page.bzr}></p>
}

if(!empty($page['Folk']) && $page['Folk_1'] != "是"){
	<p>办公室电话：<?php echo "627".substr($page['Folk'],-5,5);?></p>
}

if(!empty($page['office']) && $page['office_1'] != "是"){
	<p>办公室地址：北京市海淀区颐和园路5号，<?php echo str_replace('北京大学','北京大学，',$page['office']);?>，100871</p>
}

if(!empty($page['Lab_phone']) && $page['Lab_phone_1'] != "是" && $page['Lab_phone'] != '无'){

	<p>实验室电话：<?php echo "627".substr($page['Lab_phone'],-5,5);?></p>
}							

if(!empty($page['office2']) && $page['office2_1'] != "是"){
	<p>实验室地址：北京市海淀区颐和园路5号，<?php echo str_replace('北京大学','北京大学，',$page['office2']);?>，100871</p>
}

if(!empty($page['labhome']) && $page['labhome'] != 'http://'){
	<p>实验室主页:<{$page.labhome}></p>
}

if(!empty($page['homepage']) && $page['homepage'] != 'http://'){
	<p>个人主页：<{$page.homepage}></p>
}
==========================================================
<{$news_cont_jl9$}>

if(!empty($page['grjs']) || !empty($page['jybj']) || !empty($page['rych']) || !empty($page['gzjl']) || !empty($page['hwjx']) || !empty($page['xs_rz']) || !empty($page['zz_rz']) || !empty($page['ps_rz']) || !empty($page['hyfy']) || !empty($page['zzbj']) || !empty($page['sjbz']) || !empty($page['jcbz']) || !empty($page['shjz']) || !empty($page['kyly_ms']) || !empty($page['dbx_lw'])){
	<li class="active">个人简介</li>
}else{
	$sty = 'active';
}
if(!empty($page['kyly_ms'])){
	<li class="<{$sty}>">科研领域</li>
}
if(!empty($page['dbx_lw'])){
	<li class="<{$sty}>">代表性论文</li>
}
if(!empty($page['Grade']) && !empty($sys_je[0]['Grade_js'])){
	<li class="<{$sty}>">实验室简介</li>
}
==========================================================
<{$news_cont_jl10$}>

if(!empty($page['grjs']) || !empty($page['jybj']) || !empty($page['rych']) || !empty($page['gzjl']) || !empty($page['hwjx']) || !empty($page['xs_rz']) || !empty($page['zz_rz']) || !empty($page['ps_rz']) || !empty($page['hyfy']) || !empty($page['zzbj']) || !empty($page['sjbz']) || !empty($page['jcbz']) || !empty($page['shjz']) || !empty($page['kyly_ms']) || !empty($page['dbx_lw'])){

	<div class="item" style="display: block;">
	if(!empty($page['grjs'])){
		<h3>个人介绍:</h3><{$page.grjs}><br />
	}
	if(!empty($page['jybj'])){
		<h3>教育经历:</h3>
		<?php
		$jybj= str_replace('  ','　　',$page['jybj']);
		echo nl2br($jybj);
		?>
	<br />
	}
	if(!empty($page['rych'])){
		<h3>荣誉奖励:</h3>
		<?php
			$rych= str_replace('  ','　　',$page['rych']);
			echo nl2br($rych);
		?>
	}
	if(!empty($page['gzjl'])){
		<h3>工作经历:</h3>
		<?php
			$gzjl= str_replace('  ','　　',$page['gzjl']);
			echo nl2br($gzjl);
		?>
	}
	if(!empty($page['hwjx'])){
		<h3>社会服务工作:</h3>
		<?php
			$rych= str_replace('  ','　　',$page['rych']);
			echo nl2br($rych);
		?>
	}
	if(!empty($page['xs_rz'])){
		<h3>学术任职:</h3>
		<?php
			$xs_rz= str_replace('  ','　　',$page['xs_rz']);
			echo nl2br($xs_rz);
		?>
	}
	if(!empty($page['zz_rz'])){
		<h3>杂志任职:</h3><{$page.zz_rz}>
	}
	if(!empty($page['ps_rz'])){
		<h3>评审任职:</h3><{$page.ps_rz}>
	}
	if(!empty($page['hyfy'])){
		<h3>会议发言与组织:</h3><{$page.hyfy}>
	}
	if(!empty($page['zzbj'])){
		<h3>杂志编辑:</h3><{$page.zzbj}>
	}
	if(!empty($page['sjbz'])){
		<h3>书籍编撰:</h3><{$page.sjbz}>
	}
	if(!empty($page['jcbz'])){
		<h3>教材编撰:</h3><{$page.jcbz}>
	}
	if(!empty($page['shjz'])){
		<h3>执教课程:</h3>
		<?php
			$shjz= str_replace('  ','　　',$page['shjz']);
			echo nl2br($shjz);
		?>
	}
	if($page['gwzz']!="" && $page['adminpost']=='是'){
		<h3>岗位职责:</h3>
		<?php
			$gwzz= str_replace('  ','　　',$page['gwzz']);
			echo nl2br($gwzz);
		?>
	}
	</div>
}else{
	$stt = 'display: block;';
}

if(!empty($page['kyly_ms'])){
	<div class="item" style="<{$stt}>">
	<?php
		$kyly_ms= str_replace('  ','　　',$page['kyly_ms']);
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.nl2br($kyly_ms);
	?>
	</div>
}
if(!empty($page['dbx_lw'])){
	<div class="item" style="<{$stt}>">
		<?php
		echo nl2br($page['dbx_lw']);
		?>
	</div>
}
if(!empty($page['Grade']) && !empty($sys_je[0]['Grade_js'])){
	$grade_num = 0;
	<div class="item" style="<{$stt}>">
		<volist name='sys_je' id="sys">
		<?php
			if($sys['Grade_js'] != ''){
				$grade_num++;
				if($sys['Grade_js'] != ''){
					echo $sys['Grade_js'] . '<br />';
				}
				if($sys['Grade_member'] != ''){
					echo '实验室成员：' . '<br />'.  nl2br($sys['Grade_member']);
				}
				if($sys['Grade_pho'] != ''){
					echo '实验室电话' . $sys['Grade_pho'];
				}
			}
		?>
		</volist>
	</div>
}
==========================================================


********************************************//news_cont_jz//*******************************************************

<{$news_cont_jz1$}>
<{:U('news_img_jz',array('cid'=>68))}>
==========================================================
<{$news_cont_jz2$}>
<{$left_img}>
==========================================================
<{$news_cont_jz3$}>
<{$page.title}>
==========================================================
<{$news_cont_jz4$}>
<{$page.addtime|date='Y-m-d',###}>
==========================================================
<{$news_cont_jz5$}>
<{$page.content}>


********************************************//news_img//*******************************************************

<{$news_img1$}>

if(!empty($cat_img)){ 
	style="background: url(<{$cat_img}>) no-repeat center" 
}
==========================================================
<{$news_img2$}>
<{$bread}>
==========================================================
<{$news_img3$}>


if(I('get.cid') == 77){
	<div class="col-md-3">
		<h2>捐赠</h2>
		<ul>
			<li class="active"><a href="<{:U('news',array('cid'=>77))}>"><span>新闻动态</span></a><em></em></li>
		</ul>
	</div>
}else{
    <include file="Common:left" />
}
			
==========================================================
<{$news_img4$}>
<{:U('news',array('cid'=>I('get.cid')))}>
==========================================================
<{$news_img5$}>

<volist name="news.list" id="vim">
	<li>
		<a href="<{:U('news_cont',array('id'=>$vim['id']))}>">
			<?php
				if(!empty($vim['thumb'])){
				$img_url = $vim['thumb'];
			}else{
				$img_url = '/Public/Home/images/nor_pic.png';
			}
			?>
			<div class="pic">
				<img src="<{$img_url}>" style="width:100%" />
			</div>
			<div class="txt">
				<h5><{$vim.title}></h5>
				<?php
					$content = strip_tags($vim['content']);
				?>
				<p><{$content|msubstr=0,100}></p>
				<span class="date "><{$vim.addtime|date='Y.m.d',###}></span>
			</div>
		</a>
	</li>
</volist>

==========================================================
<{$news_img6$}>
<{$news.page}>
==========================================================
<{$news_img7$}>
<{:I('get.cid')}>   ##分页js处有问题



********************************************//news_img_jz//*******************************************************

<{$news_img_jz1$}>
<{$bread}>
==========================================================
<{$news_img_jz2$}>
<{$left_img}>
==========================================================
<{$news_img_jz3$}>


<volist name="news.list" id="vim">
	<li>
		<a href="javascript:void(0)">
			<?php
				if(!empty($vim['thumb'])){
					$img_url = $vim['thumb'];
				}else{
					$img_url = '/Public/Home/images/nor_pic.png';
				}
			?>
			<div class="pic" style="background: url(<{$img_url}>) no-repeat center/cover;"></div>
			<div class="txt">
			<h5><{$vim.title}></h5>
			<?php
				$content = strip_tags($vim['content']);
			?>
			<p><{$content|msubstr=0,100}></p>
			</div>
		</a>
	</li>
</volist>
==========================================================
<{$news_img_jz4$}>
<{$news.page}>
==========================================================
<{$news_img_jz5$}>
<{:U('news_img_jz')}>
==========================================================
<{$news_img_jz6$}>
<{:I('get.cid')}>


********************************************//news_jz//*******************************************************


<{$news_jz1$}>

<volist name="adver" id="vad">
                    <div class="swiper-slide">
                        <a href="<{$vad.url}>" style="background: url(<{$vad.logo}>) no-repeat center top/cover;"></a>
                    </div>
</volist>
==========================================================
<{$news_jz2$}>

<?php
                        if(!empty($j_news)){
                    ?>
                    <h3>今日讲座
                        <p>
                            <{$bread}>
                        </p>
                    </h3>
                    <ul>


                        <volist name="j_news" id="vjj">
                        <li>
                            <a href="<{:U('news_cont',array('id'=>$vjj['id']))}>" class="clearfix">
								<?php
									$time2 = strtotime($vjj['source']);
								?>
                                <span class="date"><{$time2|date='Y.m.d',###}></span>
                                <div class="chair_txt">
                                    <div>
                                        <p><{$vjj.title}></p>
                                        <span>主讲人：<{$vjj.zjr}>  </span>
                                        <span>时间：<{$vjj.jzsj}></span>
                                        <span>地点：<{$vjj.jzdz}></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        </volist>


                    </ul>
                    <?php
                        }
                        if(!empty($new_news)){
                    ?>
                    <h3>近期讲座</h3>
                    <ul class="old">

                        <volist name="new_news" id="ne">
                        <li>
                            <a href="<{:U('news_cont',array('id'=>$ne['id']))}>" class="clearfix">
							<?php
								$time1 = strtotime($ne['source']);
							?>
                                <span class="date"><{$time1|date='Y.m.d',###}></span>
                                <div class="chair_txt">
                                    <div>
                                        <p><{$ne.title}></p>
                                        <span>主讲人：<{$ne.zjr}>  </span>
                                        <span>时间：<{$ne.jzsj}></span>
                                        <span>地点：<{$ne.jzdz}></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        </volist>

                    </ul>
                    <?php
                        }
                    ?>

==========================================================
<{$news_jz3$}>
<volist name="news.list" id="ww">
	<li>
		<a href="<{:U('news_cont',array('id'=>$ww['id']))}>">
		<?php
			$time = strtotime($ww['source']);
		?>
		<span><{$time|date='Y.m.d',###}></span>
			<{$ww.title|msubstr=0,80}>
		</a>
	</li>
</volist>
==========================================================
<{$news_jz4$}>
<{$news.page}>
==========================================================
<{$news_jz5$}>
<{:I('get.cid')}>		##分页处有问题

********************************************//news_sys//*******************************************************


<{$news_sys1$}>

<volist name="news" id="vv" key="key">
	<?php
		if($vv != NULL){
	?>
	<li class="active">
		<p class="zy_tit"><{$key}></p>
		<div style="display: block;">
			
			<volist name="vv" id="vv2" mod="5">
				<?php
					$name = str_replace('实验室','',$vv2['Grade']);
				?>
				<div style="width:169px;height:40px;line-height:40px; float:left;text-align:center"><a href="<{:U('Index/news_cont_jl',array('name'=>$name,'id'=>$vv2['GradeID']))}>" style="color: #333;"><{$vv2.Grade}></a></div>
				<eq name="mod" value="4"><div style="clear:both;"></div></eq>
			</volist>
				<div style="clear:both"></div>	
		</div>
	</li>
	<?php
		}
	?>
</volist>

********************************************//news_szll_zy//*******************************************************

<{$news_szll_zy1$}>
<?php if(!empty($cat_img)){ ?> style="background: url(<{$cat_img}>) no-repeat center" <?php }?>
==========================================================
<{$news_szll_zy2$}>
<{$bread}>
==========================================================
<{$news_szll_zy3$}>

<?php
                        $cc = I('get.cid');
                        if($cc == 16){
                    ?>
                    <div class="list_tab">
                        <div title="按拼音排序" style="background:#dcdcdc;"><a href="<{:U('news_zzjs',array('cid'=>I('get.cid')))}>" style="text-indent: 4px;
    line-height: 22px;">拼音</a></div>
                        <div title="按专业排序" style="background:none;"><a href="#" style="
    line-height: 22px;color: #939393;">专业</a></div>
                    </div>
                    <?php
                        }
                    ?>
==========================================================
<{$news_szll_zy4$}>
<?php
                                $numm = 1;
                            ?>
                            <volist name="data" id="vv" key="key">
                            <!-- <li <?php if($numm==1){?> class="active" <?php }?>> -->
                            <li  class="active" >
                                <p class="zy_tit"><{$vv.Major}> <span title="收起"></span></p>
                                <div <?php if($numm == 1){?> style="display: block;" <?php }?>>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>姓名</th>
                                            <th>职称</th>
                                            <th>电话</th>
                                            <th>电子邮箱</th>
                                            <th>是否具招生资格</th>
                                        </tr>
                                        <volist name="vv.list" id="vvv">
                                        <tr>
                                            <td style="white-space: nowrap;"><a href="<{:U('news_cont_jl',array('id'=>$vvv['StudentID']))}>"><{$vvv.Name}></a></td>
                                            <td style="white-space: nowrap;"><?php if($t['zr_1']!="是"){?> <{$vvv.zr}> <?php }?> </td>
                                            <?php
                                                    $dh = "627" . substr($vvv['Lab_phone'],-5,5);
                                            ?>
                                            <td>
                                                <?php
                                                    if($vvv['Lab_phone_1']!="是" && !empty($vvv['Lab_phone_1'])){
                                                ?>
                                                <{$dh}>
                                                <?php
                                                    }
                                                ?>
                                            </td>
                                            <td><{$vvv.Degree}></td>
                                            <td><?php if($vvv['bodao2']=="1"){?>是<?php }else{?>否<?php }?></td>
                                        </tr>
                                        </volist>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                                <?php
                                    $numm++;
                                ?>
                            </volist>
********************************************//news_zdsys//*******************************************************
<{$news_zdsys1$}>
<{$bread}>
==========================================================
<{$news_zdsys2$}>
<volist name="news.list" id="vli" empty="建设中....">
	<div class="col-md-4">
		<a href="<{:U('news_cont',array('id'=>$vli['id']))}>">
			<div class="pic" style="background: url(<{$vli.thumb}>) no-repeat center/cover;"></div>
			<p><{$vli.title}></p>
		</a>
	</div>
</volist>
********************************************//news_tbmx//*******************************************************

<{$news_tbmx1$}>

<{:U('Index/donation')}>
==========================================================

<{$news_tbmx2$}>

<volist name="news.list" id='vv'>
	<tr>
		<td><{$vv.title}></td>
		<td><{$vv.description}></td>
		<td><{$vv.content}></td>
		<td><{$vv.addtime|date="Y-m-d",###}></td>
	</tr>
</volist>
==========================================================


<{$news_tbmx3$}>

<{$news.page}>
==========================================================

<{$news_tbmx4$}>

<{:I('cid')}>   ##此处为分页有问题
==========================================================

********************************************//news_txjg//*******************************************************


<{$news_txjg1$}>
<?php if(!empty($cat_img)){ ?> style="background: url(<{$cat_img}>) no-repeat center" <?php }?>
==========================================================
<{$news_txjg2$}>
<{$bread}>
==========================================================
<{$news_txjg3$}>
 <?php
                                $num = 0;
                                foreach ($new_cont as $key =>$val){
                            ?>
                            <a <?php if($num== 0){ ?> class="active" <?php }?> href="#bar_<{$key}>"><{$key}></a>
                                <?php
                                    $num++;
                                    }
                                ?>
==========================================================
<{$news_txjg4$}>
<?php
    $numm = 1;
    foreach($new_cont as $key =>$val){
?>
<li <?php if($numm== 1){ ?> class="active" <?php }?> id="bar_<{$key}>">
    <span><{$key}></span>

    <volist name="val" id="vvv">
    <a href="javascript:void(0)"><{$vvv.title}></a>
    </volist>
</li>
<?php
    $numm++;
    }
?>


********************************************//news_txjg_zy//*******************************************************

<{$news_txjg_zy1$}>
<?php if(!empty($cat_img)){ ?> style="background: url(<{$cat_img}>) no-repeat center" <?php }?>
==========================================================
<{$news_txjg_zy2$}>
<{$bread}>
==========================================================
<{$news_txjg_zy3$}>
<{:U('news_txjg',array('cid'=>I('get.cid')))}>
==========================================================
<{$news_txjg_zy4$}>
 <?php
    $num = 1;
?>

<volist name="n_arr" id="vv" key="key">
<span <?php if($num == 1){?> class="active" <?php }?> ><{$key}></span>
    <?php
        $num++;
    ?>
</volist>
==========================================================
<{$news_txjg_zy5$}>
<?php
                                $numm = 1;
                            ?>
                            <volist name="n_arr" id="vv" key="key">
                            <li <?php if($numm==1){?> class="active" <?php }?>>
                                <p class="zy_tit"><{$key}></p>
                                <div <?php if($numm == 1){?> style="display: block;" <?php }?>>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>姓名</th>
                                            <th>职称</th>
                                            <th>电话</th>
                                            <th>电子邮箱</th>
                                        </tr>
                                        <volist name="vv" id="vvv">
                                        <tr>
                                            <td style="white-space: nowrap;"><{$vvv.title}> </td>
                                            <td style="white-space: nowrap;"><{$vvv.zc}> </td>
                                            <td><{$vvv.dh}></td>
                                            <td><{$vvv.yx}></td>
                                        </tr>
                                        </volist>
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                                <?php
                                    $numm++;
                                ?>
                            </volist>

********************************************//news_zzjs//*******************************************************
<{$news_zzjs1$}>

<?php 
	if(!empty($cat_img)){ 
?> 
	style="background: url(<{$cat_img}>) no-repeat center" 
<?php 
	}
?>
==========================================================
<{$news_zzjs2$}>
<{$bread}>
==========================================================
<{$news_zzjs3$}>
<?php
                        $cc = I('get.cid');
                        if($cc == 16){
                    ?>
                    <div class="list_tab">
                        <div title="按拼音排序" style="background:none;"><a href="#" style="text-indent: 4px;
    line-height: 22px;">拼音</a></div>
                        <div title="按专业排序" style="background:#dcdcdc;"><a href="<{:U('news_szll_zy',array('cid'=>I('get.cid')))}>" style="
    line-height: 22px;">专业</a></div>
                    </div>

                    <?php
                        }
                    ?>  
==========================================================
<{$news_zzjs4$}>
<?php
                                $num = 0;
                                foreach ($new_cont as $key =>$val){
                            ?>
                            <a <?php if($num== 0){ ?> class="active" <?php }?> href="#bar_<{$key}>"><{$key}></a>
                                <?php
                                    $num++;
                                    }
                                ?>
==========================================================
<{$news_zzjs5$}>
<?php
                                $numm = 1;
                                foreach($new_cont as $key =>$val){
                            ?>
                            <li <?php if($numm== 1){ ?> class="active" <?php }?> id="bar_<{$key}>">
                                <span><{$key}></span>

                                <volist name="val" id="vvv">
                                <a <?php if(I('get.cid')==18){?>href="javascript:void(0)"<?php }else{ ?> href="<{:U('news_cont_jl',array('id'=>$vvv['StudentID']))}>" <?php }?> ><{$vvv.Name}></a>
                                </volist>
                            </li>
                                <?php
                                    $numm++;
                                    }
                                ?>
==========================================================

********************************************//page//*******************************************************
<{$page1$}>

<?php if(!empty($cat_img)){ ?> style="background: url(<{$cat_img}>) no-repeat center" <?php }?>
==========================================================
<{$page2$}>
<{$bread}>
==========================================================
<{$page3$}>
<{$page.catname}>
==========================================================
<{$page4$}>
<{$page.content}>

********************************************//search//*******************************************************

<{$search1$}>
<{$bread}>
==========================================================
<{$search2$}>
<{$tit}>
==========================================================
<{$search3$}>
<{$count}>
==========================================================
<{$search4$}>
<volist name="news.list" id="vli">
                            <li>
                                <a href="<{:U('news_cont',array('id'=>$vli['id']))}>">
                                    <span class="date"><{$vli.addtime|date='Y.m.d',###}></span>
									<?php
										$t = str_replace($tit,"<font style='color:#9a0000; font-weight:bold;'>$tit</font>",$vli['title']);
										$con = strip_tags($vli['content']);
										$ppstr=preg_replace('/\s|　|…|&lt;.*?&gt;|&nbsp;/i','',$con);
										$arr=explode($tit, $ppstr);
										$sum_con='...';
										if($arr[0]) $sum_con.=mb_substr($arr[0],-50,50,'utf-8');
										$sum_con.=$tit;
										//将arr[0]删除
										$arr_last=implode($tit,array_splice($arr,1));
										if($arr_last) $sum_con.=mb_substr($arr_last,0,100,'utf-8');
										$sum_con.='...';
										unset($ppstr);
										$sum_con=str_replace($tit,"<font style=' color:#9a0000; font-weight:bold;'>$tit</font>",$sum_con);
									?>
                                    <p><{$t}></p>
									<p><{$sum_con}></p>
                                </a>
                            </li>
                        </volist>
==========================================================
<{$search5$}>
<{$news.page}>
==========================================================
<{$search6$}>
<{:U('search')}>
==========================================================
<{$search7$}>
<{$tit}>
==========================================================


********************************************//wangqi//*******************************************************

<{$wangqi1$}>
<volist name='cate' id='ss'>
                <a href="<{:U('Index/wangqi')}>">
                    【&nbsp;<{$ss.catname}>&nbsp;】
                </a>
            </volist>
==========================================================

<{$wangqi2$}>
<volist name="cate" id="vv">
        <div class="history_item">
            <h3><{$vv.catname}></h3>
            <div class="row">



                <volist name="vv.list" id="vvv">
                <div class="col-md-4">
                    <a href="javascript:void(0);" class="Slide one" i="<{$vvv.thumb}>" style=" height:170px;" >
                        <img  style=" width:100%;  display:block; " src="<{$vvv.thumb}>">
                            <!--<p>第一期</p>-->                        
                        <p class="date"><{$vvv.addtime|date='Y-m-d',###}></p>
                    </a>
                </div>
                </volist>



            </div>
        </div>
        </volist>
==========================================================

<{$wangqi3$}>

==========================================================


********************************************//footer//*******************************************************
<{$footer1$}>
<volist name="links" id="vli">
	<li><a href="<{$vli.url}>"><{$vli.name}></a></li>
</volist>

==========================================================
<{$footer2$}>
<{:C('address')}>
==========================================================
<{$footer3$}>
<{:C('tel')}>
==========================================================
<{$footer4$}>
<{:C('footer')}>

********************************************//header//*******************************************************
<{$header1$}>
<{:C('title')}>

********************************************//left//*******************************************************
<{$left1$}>
<{$cate}>
==========================================================
<{$left2$}>

<?php
		if(!empty($leftMenu['child'])){
	?>
	
	
	
	<ul>

		<?php
			$str = I('get.cid');
			switch ($str){
				case 2:
					$str = 11;
					break;
				case 6:
					$str = 23;
					break;
				case 58:
					$str = 26;
					break;
			}

		?>


		<volist name="leftMenu.child" id="vle">

			<?php
				$arr = array_column($vle['child'],'id');
				if($str == $vle['id'] || $vle['id'] == 26 || in_array($str,$arr)){
					$class2 = 'active';
				}else{
					$class2 = '';
				}
				if(empty($vle['child'])){
				
			?>

			<li class="<{$class2}>"><a href="<{$vle.url}>"><span><{$vle.catname}></span></a><em></em></li>
			<?php
				}else{
					if($vle['id'] == 26){
						$href = 'index.php?s=/Home/Index/news/cid/26';
					}else{
						$href = 'javascript:void(0)';
					}
			?>
			
			<li class="<{$class2}> more_list"><a <?php if($str == 5 || $str == 26){?>style="background:#afb0ba;"class="unbindbtn"<?php }?> href="<{$href}>"><span><{$vle.catname}></span></a><em></em>
				<ul>
					<volist name="vle.child" id="vle2">
					<?php 
						if($str == $vle2['id'] || $str == 26){
							$ac = 'active';
							$style = 'color:#9a0000;';
						}else{
							$ac = '';
							$style = '';
						}
					?>
					<li class="<{$ac}>"><a style="<{$style}>" href="<{$vle2.url}>"><{$vle2.catname}></a><em></em></li>
					</volist>
				</ul>
			</li>
			<?php
				}
			?>

		</volist>


		
	</ul>
	
	<?php
	}
	?>
	<?php
		if(!empty($logo)){
	?>
	<img src="<{$logo}>" style="width: 100%; height:auto;  display:block; margin-top:10px;" alt="">
	<?php
		}
	?>


********************************************//nav//*******************************************************
<{$nav1$}>
<volist name="navlist" id="vna">
            <li><a href="<{$vna.url}>"><{$vna.catname}></a>
                <ul>
                    <volist name="vna.child" id="vch">
                    <li><a href="<{$vch.url}>"><{$vch.catname}></a></li>
                    </volist>
                </ul></li>
            </volist>
==========================================================
<{$nav2$}>
<volist name="navlist" id="vna">
	<li>
	    <a <?php if(empty($vna['child'])){?> href="<{$vna.url}>"  <?php }else{ ?> href="javascript:void(0);" <?php }?> target="_blank"><em><{$vna.catname}></em><span></span></a>
		<?php
			if(!empty($vna['child'])){
		?>
	    <ul>
	        <volist name="vna.child" id="vch">
	        <li><a href="<{$vch.url}>" target="_blank"><{$vch.catname}></a></li>
	        </volist>
	    </ul>
		
		<?php
			}
		?>
	</li>
</volist>

********************************************//top//*******************************************************
<{$top1$}>
<{:C('website')}>
==========================================================
<{$top2$}>
<{:U('Index/search')}>

********************************************//index//*******************************************************
<{$index1$}>
<volist name="adver" id="vad">
            <div class="swiper-slide"><a href="<{$vad.url}>" style="background: url(<{$vad.logo}>) no-repeat center top/cover;"></a></div>
</volist>

==========================================================
<{$index2$}>
<{:U('wangqi')}>
==========================================================
<{$index3$}>
<{:U('news',array('cid'=>20))}>
==========================================================
<{$index4$}>
<volist name="xw" id="vxw">
                    <div class="swiper-slide">
					<?php
						if(!empty($vxw['link'])){
					?>
					<a href="<{$vxw['link']}>">
					<?php
						}else{
						
					?>
                        <a href="<{:U('news_cont',array('id'=>$vxw['id']))}>">
						<?php
						}
					?>
                            <div class="pic">
                                <div style="background: url(<{$vxw.thumb}>) no-repeat center/cover;width: 100%;height: 100%;"></div>
                            </div>
                            <div class="txt">
                                <p><{$vxw.title}></p>
                                <span class="date"><{$vxw.addtime|date='Y.m.d',###}></span>
                            </div>
                        </a>
                    </div>
                    </volist>
==========================================================
<{$index5$}>
<{:U('news',array('cid'=>20))}>
==========================================================
<{$index6$}>
<{:U('news',array('cid'=>29))}>
==========================================================
<{$index7$}>
<volist name="xs" id="vxs">
                <div class="swiper-slide">
                    <a href="<{:U('news_cont',array('id'=>$vxs['id']))}>">
                        <div class="pic clearfix">
                            <!--<img src="<{$vxs.thumb}>" alt="">-->
							<div class="soogee_img" style="background:url(<{$vxs.thumb}>) no-repeat center/cover"></div>
                            <div class="fl">
                                <p><{$vxs.zjr}></p>
                                <span class="date"><{$vxs.source}></span>
                                <span class="add"><{$vxs.jzdz}></span>
                            </div>
                        </div>
                        <p><{$vxs.title}></p>
                    </a>
                </div>
                </volist>
==========================================================
<{$index8$}>
<{:U('news',array('cid'=>29))}>
==========================================================
<{$index9$}>
<{:U('news',array('cid'=>4))}>
==========================================================
<{$index10$}>
<volist name="zx" id="vzx">
                <div class="col-md-4">
                    <a href="<{:U('news_cont',array('id'=>$vzx['id']))}>">
                        <div class="date"><{$vzx.addtime|date='m-d',###}></div>
                        <p><{$vzx.title}></p>
                    </a>
                </div>
                </volist>
==========================================================
<{$index11$}>
<{:U('news',array('cid'=>21))}>
==========================================================
<{$index12$}>
<volist name="sk" id="vsk">
                <div class="col-md-4">
                        <?php
                            if($vsk['type'] == 0){
                                $url = $vsk['linkurl'];
                                if($vsk['blank'] == 1){
                                    $blank = '_blank';
                                }else{
                                    $blank = '';
                                }
                            }elseif(!empty($vsk['module_name']) && !empty($vsk['action_name'])){
                                $url = '/index.php?s=/Home/'.$vsk['module_name'] .'/' .$vsk['action_name'] . '/cid/' . $vsk['id'] ;
                            }
                        ?>
                        <a href="<{$url}>" target="<{$blank}>">

                        <div style="background: url(<{$vsk.banner}>) no-repeat center/cover;height: 100%;width: 100%;"></div>
                        <p><{$vsk.catname}></p>
                    </a>
                </div>
                </volist>
==========================================================

<{$index13$}>
<{:U('news_zdsys',array('cid'=>32))}>
==========================================================
<{$index14$}>
<{:U('page',array('cid'=>49))}>
==========================================================
<{$index15$}>
<{:U('donation')}>
==========================================================
<{$index16$}>

==========================================================


































