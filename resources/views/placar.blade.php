@extends("index")
@section("conteudo")
@push('css')
<link rel="stylesheet" href="/assets/css/placar.css">
@endpush
<main class="tela">
    <header style="background: rgba(255, 255, 255, 0.15); border-radius: 16px; padding: 16px; margin-bottom: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
            <i data-lucide="clock" style="width: 20px; height: 20px; color: #FFFFFF;"></i>
            <span style="font-size: 13px; color: rgba(255, 255, 255, 0.9); font-weight: 600;">Reset Mensal</span>
        </div>
        <div style="font-size: 28px; font-weight: 800; color: #FFFFFF; font-family: 'Courier New', monospace;">15d 08h 42m</div>
        <p style="font-size: 11px; color: rgba(255, 255, 255, 0.7); margin-top: 8px;">O placar será resetado no próximo mês</p>
    </header>
    <div style="background: linear-gradient(135deg, rgba(34, 197, 94, 0.2), rgba(52, 211, 153, 0.2)); border-radius: 16px; padding: 20px; margin-bottom: 20px; backdrop-filter: blur(10px); border: 2px solid rgba(34, 197, 94, 0.4);">
        <p style="font-size: 12px; font-weight: 600; color: rgba(255, 255, 255, 0.9); margin-bottom: 12px;">Sua posição</p>
        <div style="display: flex; align-items: center; gap: 16px;">
            <div style="width: 70px; height: 70px; border-radius: 50%; background: linear-gradient(135deg, #FF5C00, #FF8A3D); display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3);">
                <i data-lucide="user" style="width: 36px; height: 36px; color: #FFFFFF;"></i>
            </div>
            <div style="flex: 1;">
                <div style="display: flex; align-items: baseline; gap: 8px; margin-bottom: 8px;">
                    <div style="font-size: 36px; font-weight: 800; color: #22c55e;">8º</div>
                    <div style="font-size: 13px; color: rgba(255, 255, 255, 0.8);">lugar</div>
                </div>
                <p style="font-size: 16px; font-weight: 700; color: #FFFFFF; margin-bottom: 2px;">João Silva</p>
                <p style="font-size: 12px; color: rgba(255, 255, 255, 0.8);">Academia Fitness Plus</p>
            </div>
            <div style="text-align: center; background: rgba(34, 197, 94, 0.3); border-radius: 8px; padding: 12px 16px; flex-shrink: 0;">
                <div style="font-size: 20px; font-weight: 800; color: #22c55e;">1250</div>
                <div style="font-size: 11px; color: rgba(255, 255, 255, 0.8); margin-top: 4px;">XP</div>
            </div>
        </div>
    </div>
    <div style="background: rgba(255, 255, 255, 0.95); border-radius: 16px; padding: 0; backdrop-filter: blur(10px); overflow: hidden;">
        <div style="padding: 20px; border-bottom: 1px solid #e5e5e5;">
            <h3 style="font-size: 16px; font-weight: 700; color: #1A1A1A; display: flex; align-items: center; gap: 8px;">
                <i data-lucide="trending-up" style="width: 20px; height: 20px; color: #FF5C00;"></i>Ranking Geral
            </h3>
        </div>
        <div style="display: flex; flex-direction: column;">
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;" onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800; color: #FFFFFF; font-size: 20px;">🥇</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Carlos Silva</p>
                    <p style="font-size: 12px; color: #999;">Academia Power Gym</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">2840</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;"onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #C0C0C0, #A9A9A9); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800; color: #FFFFFF; font-size: 20px;">🥈</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Maria Santos</p>
                    <p style="font-size: 12px; color: #999;">Studio Bike Elite</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">2620</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;"onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #CD7F32, #B8860B); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 800; color: #FFFFFF; font-size: 20px;">🥉</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Pedro Oliveira</p>
                    <p style="font-size: 12px; color: #999;">Bike Club Centro</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">2480</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;"onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #E8E8E8, #D3D3D3); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700; color: #666; font-size: 16px;">4º</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Ana Costa</p>
                    <p style="font-size: 12px; color: #999;">Fitness Village</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">2350
                    </div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;"onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #E8E8E8, #D3D3D3); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700; color: #666; font-size: 16px;">5º</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Lucas Martins</p>
                    <p style="font-size: 12px; color: #999;">Centro Ciclismo</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">2180</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;"onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #E8E8E8, #D3D3D3); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700; color: #666; font-size: 16px;">6º</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Fernanda Lima</p>
                    <p style="font-size: 12px; color: #999;">Sports Academy</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">1890</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;"onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #E8E8E8, #D3D3D3); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700; color: #666; font-size: 16px;">7º</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Roberto Gomes</p>
                    <p style="font-size: 12px; color: #999;">Bike Trail Park</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">1580</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; background: rgba(255, 92, 0, 0.08); cursor: pointer;">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #FF5C00, #FF8A3D); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700; color: #FFFFFF; font-size: 16px;">8º</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">João Silva</p>
                    <p style="font-size: 12px; color: #999;">Academia Fitness Plus</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">1250</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;"onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #E8E8E8, #D3D3D3); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700; color: #666; font-size: 16px;">9º</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Beatriz Rocha</p>
                    <p style="font-size: 12px; color: #999;">Pedal Club</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">980</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
            <div style="padding: 16px 20px; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; gap: 16px; transition: background 0.2s; cursor: pointer;"onmouseover="this.style.background='#f9f9f9'" onmouseout="this.style.background='transparent'">
                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #E8E8E8, #D3D3D3); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700; color: #666; font-size: 16px;">10º</div>
                <div style="flex: 1;">
                    <p style="font-size: 14px; font-weight: 700; color: #1A1A1A;">Gustavo Alves</p>
                    <p style="font-size: 12px; color: #999;">Trail Bikes</p>
                </div>
                <div style="text-align: right; flex-shrink: 0;">
                    <div style="font-size: 18px; font-weight: 800; color: #FF5C00;">750</div>
                    <div style="font-size: 11px; color: #999;">XP</div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection