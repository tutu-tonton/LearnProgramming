import streamlit as st
import datetime
import random
import requests
import json

page = st.sidebar.selectbox('Choose your page', ['users', 'rooms', 'bookings'])

if page == 'users':

    st.title('ユーザー登録画面')

    with st.form(key='user'):
        # 送信用個別要素作成
        # user_id: int = random.randint(0, 10)
        username: str = st.text_input('ユーザー名', max_chars=12)
        # 送信用データとしてまとめる
        data = {
            # 'user_id': user_id,
            'username': username
        }
        submit_button = st.form_submit_button(label='ユーザー登録')

    if submit_button:
        # st.write('## 送信データ')
        # 送信前データをjson形式で表示
        # st.json(data)
        # st.write('## レスポンス結果')
        url = 'http://127.0.0.1:8000/users'
        res = requests.post(
            url,
            data=json.dumps(data)
        )
        if res.status_code == 200:
            st.success('ユーザー登録完了')
        st.json(res.json())

elif page == 'rooms':
    st.title('会議室登録画面')

    # ================== ユーザー一覧取得 ==========
    url_users = '127.0.0.1:8000/users'
    res = requests.get(url_users)
    users = res.json()
    # users = [
    #     0 : {
    #         'username' : 'imanyu'
    #         'user_id' : 1
    #     },
    #     1 : {
    #         'username' : 'imanishi'
    #         'user_id' : 2
    #     }
    # ]

    # dict型作りたい　key:username, value:user_id
    users_dict = {}
    for user in users:
        users_dict[user['username']] = user['user_id']
    # users_dict = {
    #     'imanyu' : 1,
    #     'imanishi' : 2
    # }

    # ========== 会議室一覧取得 ==========
    url_rooms = '127.0.0.1:8000/rooms'
    res = requests.get(url_rooms)
    rooms = res.json()
    # rooms = [
    #     0 : {
    #         'room_name' : 'room1'
    #         'capacity' : 3
    #         'room_id' : 1
    #     },
    #     1 : {
    #     }
    # ]
    # dict型作りたい　{ room_name : { capacity : , room_id: }}
    rooms_dict = {}
    for room in rooms:
        rooms_dict[room['room-name']] = {
            'room_id': room['room_id']
            'capacity': room['capacity']
        }
    # rooms_dict = {
    #     'room1' : {
    #         'room_id' : 1
    #         'capacity' : 5
    #     }
    # }

    with st.form(key='room'):
        # room_id: int = random.randint(0, 10)
        room_name: str = st.text_input('会議室名', max_chars=12)
        capacity: int = st.number_input('定員', step=1)
        data = {
            # 'room_id': room_id,
            'room_name': room_name,
            'capacity': capacity
        }
        submit_button = st.form_submit_button(label='会議室登録')

    if submit_button:
        # st.write('## 送信データ')
        # st.json(data)
        # st.write('## レスポンス結果')
        url = 'http://127.0.0.1:8000/rooms'
        res = requests.post(
            url,
            data=json.dumps(data)
        )
        if res.status_code == 200:
            st.success('会議室登録完了')
        st.json(res.json())

elif page == 'bookings':
    st.title('会議室予約画面')

    # ユーザー一覧取得

    with st.form(key='booking'):
        booking_id: int = random.randint(0, 10)
        user_id: int = random.randint(0, 10)
        room_id: int = random.randint(0, 10)
        booked_num: int = st.number_input('予約人数', step=1)
        date = st.date_input('日付: ', min_value=datetime.date.today())
        start_time = st.time_input(
            '開始時刻： ', value=datetime.time(hour=9, minute=0))
        end_time = st.time_input(
            '終了時刻： ', value=datetime.time(hour=20, minute=0))
        data = {
            'booking_id': booking_id,
            'user_id': user_id,
            'room_id': room_id,
            'booked_num': booked_num,
            'start_datetime': datetime.datetime(
                year=date.year,
                month=date.month,
                day=date.day,
                hour=start_time.hour,
                minute=start_time.minute
            ).isoformat(),
            'end_datetime': datetime.datetime(
                year=date.year,
                month=date.month,
                day=date.day,
                hour=end_time.hour,
                minute=end_time.minute
            ).isoformat()
        }
        submit_button = st.form_submit_button(label='リクエスト送信')

    if submit_button:
        st.write('## 送信データ')
        st.json(data)
        st.write('## レスポンス結果')
        url = 'http://127.0.0.1:8000/bookings'
        res = requests.post(
            url,
            data=json.dumps(data)
        )
        st.write(res.status_code)
        st.json(res.json())
