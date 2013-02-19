<div id="main" role="main">
	<div id="content">
		<article class="basket">

			<div class="shop-confirmorder">
			
				<form method="post" action={"/shop/confirmorder/"|ezurl}>
				
				<div class="attribute-header">
				    <h1 class="long">{"Thank you for your payment."|i18n('dcd/shop/success')}</h1>
				</div>
				
				<div class="warning">
					<p>
					{"Your transaction has been completed and a receipt for your purchase has been emailed to you. You may log into your account at www.paypal.com to view details of this transaction."|i18n('dcd/shop/success')}
					</p>
				</div>
			</div>
		</article>
	</div>
</div>

{include uri="design:shop/status.tpl" status='order'}