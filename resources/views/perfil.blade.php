@extends("index")
@section("conteudo")
    <div class="app-wrapper">
        <div style="background: linear-gradient(135deg, #FF5C00 0%, #FF8A3D 100%); max-width: 390px; width: 100%; margin: 0 auto; padding: 0; min-height: 100%; display: flex; flex-direction: column; position: relative; z-index: 1;">
            <div style="flex: 1; overflow-y: auto;">
                <div style="padding: 24px 20px;">
                    <div style="text-align: center; margin-bottom: 28px;">
                        <div style="width: 80px; height: 80px; border-radius: 50%; background: rgba(255, 255, 255, 0.3); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);">
                            <i data-lucide="user" style="width: 40px; height: 40px; color: #FFFFFF;"></i>
                        </div>
                        <h2 style="font-size: 24px; font-weight: 800; color: #FFFFFF; margin-bottom: 4px;">Bem vindo, Java man!</h2>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 14px;">Sua área pessoal</p>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.95); border-radius: 16px; padding: 20px; backdrop-filter: blur(10px);">
                        <div style="margin-bottom: 20px;">
                            <label style="font-size: 12px; font-weight: 600; color: #FF5C00; display: block; margin-bottom: 6px;">Nome</label>
                            <p style="font-size: 16px; color: #1A1A1A; font-weight: 500;">Java man</p>
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label style="font-size: 12px; font-weight: 600; color: #FF5C00; display: block; margin-bottom: 6px;">E-mail</label>
                            <p style="font-size: 16px; color: #1A1A1A; font-weight: 500;">java@man.com</p>
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label style="font-size: 12px; font-weight: 600; color: #FF5C00; display: block; margin-bottom: 6px;">Localidade</label>
                            <p style="font-size: 16px; color: #1A1A1A; font-weight: 500;">Xique-Xique, BA</p>
                        </div>
                        <div style="background: #f5f5f5; border-radius: 12px; padding: 16px; margin-top: 20px; border-left: 4px solid #FF5C00;">
                            <p style="font-size: 13px; color: #666; margin-bottom: 8px; font-weight: 600;">Estatísticas</p>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                                <div style="text-align: center;">
                                    <div style="font-size: 24px; font-weight: 800; color: #FF5C00;">45</div>
                                    <div style="font-size: 12px; color: #999; margin-top: 4px;">Treinos</div>
                                </div>
                                <div style="text-align: center;">
                                    <div style="font-size: 24px; font-weight: 800; color: #FF5C00;">280km</div>
                                    <div style="font-size: 12px; color: #999; margin-top: 4px;">Distância</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection