@extends("index")
@section("conteudo")
<body>
    <div class="app-wrapper">
        <div style="background: linear-gradient(135deg, #FF5C00 0%, #FF8A3D 100%); max-width: 390px; width: 100%; margin: 0 auto; padding: 0; min-height: 100%; display: flex; flex-direction: column; position: relative; z-index: 1;">
            <div style="flex: 1; overflow-y: auto;">
                <div style="padding: 24px 20px;">
                    <h2 style="font-size: 24px; font-weight: 800; color: #FFFFFF; margin-bottom: 20px; text-shadow: 0 2px 8px rgba(0,0,0,0.15);">Desafios</h2>
                    <div style="background: rgba(255, 255, 255, 0.95); border-radius: 16px; padding: 20px; backdrop-filter: blur(10px);">
                        <div style="display: grid; gap: 16px;">
                            <div style="background: rgba(255, 255, 255, 0.95); border-radius: 16px; padding: 20px; backdrop-filter: blur(10px); border-left: 4px solid #FF5C00;">
                                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                    <div style="flex: 1;">
                                        <h3 style="font-size: 16px; font-weight: 700; color: #1A1A1A; margin-bottom: 4px;">Corrida Rápida</h3>
                                        <p style="font-size: 13px; color: #666;">Termine a corrida em 30 minutos</p>
                                    </div>
                                    <div style="background: #fff5f0; border-radius: 8px; padding: 6px 12px; text-align: center;">
                                        <span style="font-size: 12px; font-weight: 700; color: #FF5C00;">+50 XP</span>
                                    </div>
                                </div>
                                <div style="margin-bottom: 12px;">
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                        <span style="font-size: 12px; color: #999; font-weight: 600;">Progresso</span>
                                        <span style="font-size: 12px; font-weight: 700; color: #FF5C00;">18/30 min</span>
                                    </div>
                                    <div style="width: 100%; height: 8px; background: #e5e5e5; border-radius: 4px; overflow: hidden;">
                                        <div style="width: 60%; height: 100%; background: linear-gradient(90deg, #FF5C00, #FF8A3D); border-radius: 4px;"></div>
                                    </div>
                                </div>
                                <p style="font-size: 11px; color: #999;">Faltam 12 minutos para completar</p>
                            </div>
                            <div style="background: rgba(255, 255, 255, 0.95); border-radius: 16px; padding: 20px; backdrop-filter: blur(10px); border-left: 4px solid #22c55e;">
                                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                    <div style="flex: 1;">
                                        <h3 style="font-size: 16px; font-weight: 700; color: #1A1A1A; margin-bottom: 4px;">Coletor de Moedas</h3>
                                        <p style="font-size: 13px; color: #666;">Colete 100 moedas no trajeto</p>
                                    </div>
                                    <div style="background: #f0fdf4; border-radius: 8px; padding: 6px 12px; text-align: center;">
                                        <span style="font-size: 12px; font-weight: 700; color: #22c55e;">+75 XP</span>
                                    </div>
                                </div>
                                <div style="margin-bottom: 12px;">
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                        <span style="font-size: 12px; color: #999; font-weight: 600;">Progresso</span>
                                        <span style="font-size: 12px; font-weight: 700; color: #22c55e;">87/100 moedas</span>
                                    </div>
                                    <div style="width: 100%; height: 8px; background: #e5e5e5; border-radius: 4px; overflow: hidden;">
                                        <div style="width: 87%; height: 100%; background: linear-gradient(90deg, #22c55e, #4ade80); border-radius: 4px;"></div>
                                    </div>
                                </div>
                                <p style="font-size: 11px; color: #999;">Faltam 13 moedas para completar</p>
                            </div>
                            <div style="background: rgba(255, 255, 255, 0.95); border-radius: 16px; padding: 20px; backdrop-filter: blur(10px); border-left: 4px solid #3b82f6;">
                                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                    <div style="flex: 1;">
                                        <h3 style="font-size: 16px; font-weight: 700; color: #1A1A1A; margin-bottom: 4px;">Queimador de Calorias</h3>
                                        <p style="font-size: 13px; color: #666;">Queime 500 calorias no treino</p>
                                    </div>
                                    <div style="background: #eff6ff; border-radius: 8px; padding: 6px 12px; text-align: center;">
                                        <span style="font-size: 12px; font-weight: 700; color: #3b82f6;">+100 XP</span>
                                    </div>
                                </div>
                                <div style="margin-bottom: 12px;">
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                        <span style="font-size: 12px; color: #999; font-weight: 600;">Progresso</span>
                                        <span style="font-size: 12px; font-weight: 700; color: #3b82f6;">347/500 kcal</span>
                                    </div>
                                    <div style="width: 100%; height: 8px; background: #e5e5e5; border-radius: 4px; overflow: hidden;">
                                        <div style="width: 69%; height: 100%; background: linear-gradient(90deg, #3b82f6, #60a5fa); border-radius: 4px;"></div>
                                    </div>
                                </div>
                                <p style="font-size: 11px; color: #999;">Faltam 153 calorias para completar</p>
                            </div>
                            <div style="background: rgba(255, 255, 255, 0.95); border-radius: 16px; padding: 20px; backdrop-filter: blur(10px); border-left: 4px solid #a78bfa; opacity: 0.8;">
                                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                    <div style="flex: 1;">
                                        <h3 style="font-size: 16px; font-weight: 700; color: #1A1A1A; margin-bottom: 4px;">Maratona Matinal</h3>
                                        <p style="font-size: 13px; color: #666;">Pedal por 60 minutos seguidos</p>
                                    </div>
                                    <div style="background: #f3e8ff; border-radius: 8px; padding: 6px 12px; text-align: center;">
                                        <span style="font-size: 12px; font-weight: 700; color: #a78bfa;">✓ Concluído</span>
                                    </div>
                                </div>
                                <div style="margin-bottom: 12px;">
                                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                        <span style="font-size: 12px; color: #999; font-weight: 600;">Progresso</span>
                                        <span style="font-size: 12px; font-weight: 700; color: #a78bfa;">60/60 min</span>
                                    </div>
                                    <div style="width: 100%; height: 8px; background: #e5e5e5; border-radius: 4px; overflow: hidden;">
                                        <div style="width: 100%; height: 100%; background: linear-gradient(90deg, #a78bfa, #c4b5fd); border-radius: 4px;"></div>
                                    </div>
                                </div>
                                <p style="font-size: 11px; color: #999;">Desafio completado! 🎉</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection