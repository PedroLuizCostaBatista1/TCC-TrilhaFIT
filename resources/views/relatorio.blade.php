@extends("index")
@section("conteudo")
<div class="app-wrapper">
    <div style="background: linear-gradient(135deg, #FF5C00 0%, #FF8A3D 100%); max-width: 390px; width: 100%; margin: 0 auto; padding: 0; min-height: 100%; display: flex; flex-direction: column; position: relative; z-index: 1;">
        <div style="flex: 1; overflow-y: auto;">
            <div style="padding: 24px 20px;">
                <h2 style="font-size: 24px; font-weight: 800; color: #FFFFFF; margin-bottom: 20px; text-shadow: 0 2px 8px rgba(0,0,0,0.15);">Relatório do Treino</h2>
                <div style="background: rgba(255, 255, 255, 0.95); border-radius: 16px; padding: 20px; backdrop-filter: blur(10px);">
                    <div style="margin-bottom: 24px;">
                        <p style="font-size: 12px; font-weight: 600; color: #FF5C00; margin-bottom: 12px;">Última sessão</p>
                        <p style="font-size: 13px; color: #666;">Hoje às 14:30</p>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px;">
                        <div style="background: #fff5f0; border-radius: 12px; padding: 16px; border-left: 4px solid #FF5C00;">
                            <div style="font-size: 12px; font-weight: 600; color: #FF5C00; margin-bottom: 8px;">RPM</div>
                            <div style="font-size: 28px; font-weight: 800; color: #1A1A1A;">85</div>
                            <div style="font-size: 12px; color: #999; margin-top: 4px;">rotações/min</div>
                        </div>
                        <div style="background: #fff5f0; border-radius: 12px; padding: 16px; border-left: 4px solid #FF5C00;">
                            <div style="font-size: 12px; font-weight: 600; color: #FF5C00; margin-bottom: 8px;">Distância</div>
                            <div style="font-size: 28px; font-weight: 800; color: #1A1A1A;">12.5</div>
                            <div style="font-size: 12px; color: #999; margin-top: 4px;">quilômetros</div>
                        </div>
                        <div style="background: #fff5f0; border-radius: 12px; padding: 16px; border-left: 4px solid #FF5C00;">
                            <div style="font-size: 12px; font-weight: 600; color: #FF5C00; margin-bottom: 8px;">Calorias</div>
                            <div style="font-size: 28px; font-weight: 800; color: #1A1A1A;">347</div>
                            <div style="font-size: 12px; color: #999; margin-top: 4px;">kcal queimadas</div>
                        </div>
                        <div style="background: #fff5f0; border-radius: 12px; padding: 16px; border-left: 4px solid #FF5C00;">
                            <div style="font-size: 12px; font-weight: 600; color: #FF5C00; margin-bottom: 8px;">Duração</div>
                            <div style="font-size: 28px; font-weight: 800; color: #1A1A1A;">45</div>
                            <div style="font-size: 12px; color: #999; margin-top: 4px;">minutos</div>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #e5e5e5; padding-top: 16px; margin-top: 16px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                            <span style="font-size: 13px; color: #666; font-weight: 600;">FC Média</span>
                            <span style="font-size: 18px; font-weight: 800; color: #FF5C00;">132 bpm</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                            <span style="font-size: 13px; color: #666; font-weight: 600;">Velocidade Média</span> 
                            <span style="font-size: 18px; font-weight: 800; color: #FF5C00;">16.7 km/h</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 13px; color: #666; font-weight: 600;">Altitude Ganho</span>
                            <span style="font-size: 18px; font-weight: 800; color: #FF5C00;">245 m</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection