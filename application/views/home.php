	<div id="intro">
		
        <div class="storys">

            <div class="bg_second"></div>

	    </div>
	</div> 
	
	<div id="third">
		<div class="contents">
				
            <div class="contents_right">
            	
                <ol class="a">
                    <li><h3>web</h3></li>
                    <li><p>Soluções digitais que funcionam como hubs para a comunicação online: sites, hotsites, portais, e-commerce, landing pages, e-mail marketing e ferramentas.</p></li>
                </ol>                

                <ol class="b">
                    <li><h3>redes sociais</h3></li>
                    <li><p>Análise de presença digital, personalização e administração de perfis em todas as redes sociais, gestão de conteúdo próprio para cada marca, monitoramento, gerenciamento de crise, desenvolvimento de aplicativos e planejamento de campanhas.</p></li>
                </ol> 

                <ol class="c">
                    <li><h3>mídia</h3></li>
                    <li><p>Planejamento de mídia online, google adwords, facebook ads, otimização de canais digitais via SEO e SEM e acompanhamento de resultados.</p></li>
                </ol> 

                <ol class="d">
                    <li><h3>mobile</h3></li>
                    <li><p>Desenvolvimento de aplicativos, criação e adaptação de sites e sistemas para visualização em celulares e tablets e campanhas de SMS.</p></li>
                </ol>

                <ol class="e">
                    <li><h3>sistemas</h3></li>
                    <li><p>Feramentas sob medida: arquitetura de informação, controle e acompanhamento de processos, pesquisas online, relatórios gerenciais, intranet e softwares.</p></li>
                </ol>

                <ol class="f">
                    <li><h3>comunicação visual</h3></li>
                    <li><p>Além de todas as especialidades voltadas para o mundo online, a Lemon digital cria a sua identidade visual, ilustrações, materiais gráficos, concept art, 3D e muito mais.</p></li>
                </ol>

            </div>
                
	    </div>
	</div> 

    <div id="fifth">
		
        <div id="manifesto">

            <h3>Somos<br>desassossegados.</h3>
            <h3 class="green">Não nos contentamos<br>com qualquer solução.</h3>
            <p>Muita produtividade. Muita criatividade. Muita paixão.</p>
            <p>E muito, mas muito limão. Porque o que é doce é fácil.</p>
            <p>Mamão com a açúcar nunca foi nosso prato favorito.</p>    
        
        </div>
        	
        <div id="accordion">
        
            <div class="cases"><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/moldura_cases.png" width="881" height="97" border="0"></a></div>
            <div class="block">
                <div class="content">
                    <div class="infos">
                        <div class="text">
                            <h3>Kaballah Circus Festival 2012</h3>
                            <p>Criação de todos os materiais de divulgação.</p>
                            <p>Conceito, fyers, cartazes, posts de redes sociais, banners, brindes e hotsite.</p>
                        </div>
                                        
                        <div class="image">
                            <img src="<?php echo base_url(); ?>assets/images/case_kaballah.png" width="485" height="318">
                        </div>
                    </div>
                </div>
    
                <div class="pictures">
                    <img src="<?php echo base_url(); ?>assets/upload/kaballah.jpg" width="800" height="1120">
                    
                    <br>
                    
                    <img src="<?php echo base_url(); ?>assets/upload/kaballah2.jpg" width="800" height="564">
                </div>
            </div>
                    
            <div class="cases"><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/moldura_cases.png" width="881" height="97" border="0"></a></div>
            <div class="block">
                <div class="content">
                    <div class="infos">
                        <div class="text">
                            <h3>Kaballah Circus Festival 2012</h3>
                            <p>Criação de todos os materiais de divulgação.</p>
                            <p>Conceito, fyers, cartazes, posts de redes sociais, banners, brindes e hotsite.</p>
                        </div>
                                        
                        <div class="image">
                            <img src="<?php echo base_url(); ?>assets/images/case_kaballah.png" width="485" height="318">
                        </div>
                    </div>
                </div>
    
                <div class="pictures">
                    <img src="<?php echo base_url(); ?>assets/upload/kaballah.jpg" width="800" height="1120">
                    <br>
                    <img src="<?php echo base_url(); ?>assets/upload/kaballah2.jpg" width="800" height="564">
                </div>
            </div>
		</div>
	</div> 
	
    <div id="sixty">

        <div class="texto_formulario">
        	
            <div class="text">
				
                <div class="text_align">
                    
                    <div class="manifesto">
                        <h3>Somos<br>desassossegados.</h3>
                        <h3>Não nos contentamos<br>com qualquer solução.</h3>
                        <h3>Se a vida está doce,<br>adicionamos limão.</h3>
                    
                        <p>Portanto, se o mercado te der limões,<br>traga para a Lemon Digital.</p>
                        <p>Faremos uma deliciosa torta, coberta<br>com suspiros e raspas de limão siciliano.</p>
					</div>
                    
                    <div class="lousa">
                        <a href="https://www.facebook.com/lemondigital" target="_blank"><img src="<?php echo base_url(); ?>assets/images/lousa_contato.png" width="260" height="307" border="0"></a>
                    </div>
				</div>
				
                <div class="limoes">
                    <img src="<?php echo base_url(); ?>assets/images/lemon_formulario.png" width="659" height="229">
        		</div>
      		</div>
            
            <div class="formulario">

				<?php 
                    
                    $attributes = array('id' => 'FormX', 'name' => 'FormX');
                
                    echo form_open(base_url() . 'home/enviar', $attributes); 
                    
                ?>
                <fieldset>
                    
                    <label for="Nome">nome*</label>
                    <input id="nome" name="nome" required type="text"> 

                    <label for="Empresa">empresa</label>
                    <input id="empresa" name="empresa" required type="text">                    

                    <label for="Email">e-mail*</label>
                    <input id="email" name="email" required type="email">

                    <label for="Residencial">telefone</label>
                    <input id="telefone" name="telefone" type="text" class="phone_with_ddd">

                    <label for="Mensagem">mensagem*</label>
                    <textarea id="mensagem" name="mensagem" required rows="3" cols="80"></textarea>

                    <div class="ButtonPlace"><input id="bt_Enviar" name="bt_Enviar" type="submit" value="enviar" class="Button"></div>
                    
					<div class="falecom">
                    	<a href="mailto:falecom@lemondigital.com.br"><img src="<?php echo base_url(); ?>assets/images/falecom.png" width="276" height="75" border="0"></a>
                    </div>
                    
                    <div class="fones">
                        <h3>+ 55 11 XXXX-XXXX</h3>
                        <p>Av. Santa Inês, 771 - sala 02<br>São Paulo - Mandaqui - 02631-000</p>
                    </div>
                    
                </fieldset>
                <?php echo form_close(); ?>
                
            </div>
		</div>