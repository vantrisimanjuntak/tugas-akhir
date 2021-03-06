PGDMP     (    '                x            db_ta_ujicoba    13.0    13.0 '    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    17317    db_ta_ujicoba    DATABASE     p   CREATE DATABASE db_ta_ujicoba WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Indonesian_Indonesia.1252';
    DROP DATABASE db_ta_ujicoba;
                postgres    false            �            1259    17343    dosen    TABLE       CREATE TABLE public.dosen (
    nip character varying(255) NOT NULL,
    nama character varying(255) NOT NULL,
    pendidikan_terakhir character varying(5) NOT NULL,
    foto character varying(255) NOT NULL,
    program_studi character varying(5) NOT NULL
);
    DROP TABLE public.dosen;
       public         heap    postgres    false            �            1259    17407    index_id_seq    SEQUENCE     u   CREATE SEQUENCE public.index_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.index_id_seq;
       public          postgres    false            �            1259    17391    index    TABLE       CREATE TABLE public.index (
    id integer DEFAULT nextval('public.index_id_seq'::regclass) NOT NULL,
    term character varying(100) NOT NULL,
    no_doc character varying(10) NOT NULL,
    total_dokumen integer NOT NULL,
    idf numeric(10,6) NOT NULL
);
    DROP TABLE public.index;
       public         heap    postgres    false    209            �            1259    17363    kata_imbuhan    TABLE     �   CREATE TABLE public.kata_imbuhan (
    id character varying(5) NOT NULL,
    kata_imbuhan character varying(50) NOT NULL,
    kata_dasar character varying(50) NOT NULL
);
     DROP TABLE public.kata_imbuhan;
       public         heap    postgres    false            �            1259    17333 
   login_time    TABLE     �   CREATE TABLE public.login_time (
    id character varying(10) NOT NULL,
    login_id character varying(1) NOT NULL,
    time_login timestamp without time zone NOT NULL,
    ip_address character varying(255) NOT NULL
);
    DROP TABLE public.login_time;
       public         heap    postgres    false            �            1259    17338 	   mahasiswa    TABLE     �   CREATE TABLE public.mahasiswa (
    nim integer NOT NULL,
    nama character varying(255) NOT NULL,
    program_studi character varying(4) NOT NULL
);
    DROP TABLE public.mahasiswa;
       public         heap    postgres    false            �            1259    17411 	   pencarian    TABLE     �   CREATE TABLE public.pencarian (
    id character varying(10) NOT NULL,
    keyword character varying(255) NOT NULL,
    waktu timestamp(6) without time zone NOT NULL
);
    DROP TABLE public.pencarian;
       public         heap    postgres    false            �            1259    17401    program_studi    TABLE     �   CREATE TABLE public.program_studi (
    kd_program_studi character varying(5) NOT NULL,
    program_studi character varying(255) NOT NULL
);
 !   DROP TABLE public.program_studi;
       public         heap    postgres    false            �            1259    17351    stopword    TABLE     v   CREATE TABLE public.stopword (
    id character varying(10) NOT NULL,
    stopword character varying(100) NOT NULL
);
    DROP TABLE public.stopword;
       public         heap    postgres    false            �            1259    17318 	   superuser    TABLE     �   CREATE TABLE public.superuser (
    id character varying(5) NOT NULL,
    username character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    alias character varying(50) NOT NULL
);
    DROP TABLE public.superuser;
       public         heap    postgres    false            �            1259    17368    tugas_akhir    TABLE     G  CREATE TABLE public.tugas_akhir (
    no_reg character varying(8) NOT NULL,
    mahasiswa integer NOT NULL,
    judul_skripsi character varying(255) NOT NULL,
    abstrak text NOT NULL,
    dp_satu character varying(30) NOT NULL,
    dp_dua character varying(30) NOT NULL,
    ta_program_studi character varying(5) NOT NULL
);
    DROP TABLE public.tugas_akhir;
       public         heap    postgres    false            �          0    17343    dosen 
   TABLE DATA           T   COPY public.dosen (nip, nama, pendidikan_terakhir, foto, program_studi) FROM stdin;
    public          postgres    false    203   �,       �          0    17391    index 
   TABLE DATA           E   COPY public.index (id, term, no_doc, total_dokumen, idf) FROM stdin;
    public          postgres    false    207   �2       �          0    17363    kata_imbuhan 
   TABLE DATA           D   COPY public.kata_imbuhan (id, kata_imbuhan, kata_dasar) FROM stdin;
    public          postgres    false    205   ,H       �          0    17333 
   login_time 
   TABLE DATA           J   COPY public.login_time (id, login_id, time_login, ip_address) FROM stdin;
    public          postgres    false    201   �H       �          0    17338 	   mahasiswa 
   TABLE DATA           =   COPY public.mahasiswa (nim, nama, program_studi) FROM stdin;
    public          postgres    false    202   sI       �          0    17411 	   pencarian 
   TABLE DATA           7   COPY public.pencarian (id, keyword, waktu) FROM stdin;
    public          postgres    false    210   *h       �          0    17401    program_studi 
   TABLE DATA           H   COPY public.program_studi (kd_program_studi, program_studi) FROM stdin;
    public          postgres    false    208   j       �          0    17351    stopword 
   TABLE DATA           0   COPY public.stopword (id, stopword) FROM stdin;
    public          postgres    false    204   }j       �          0    17318 	   superuser 
   TABLE DATA           B   COPY public.superuser (id, username, password, alias) FROM stdin;
    public          postgres    false    200   k       �          0    17368    tugas_akhir 
   TABLE DATA           s   COPY public.tugas_akhir (no_reg, mahasiswa, judul_skripsi, abstrak, dp_satu, dp_dua, ta_program_studi) FROM stdin;
    public          postgres    false    206   �k       �           0    0    index_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.index_id_seq', 691, true);
          public          postgres    false    209            Q           2606    17350    dosen dosen_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY public.dosen
    ADD CONSTRAINT dosen_pkey PRIMARY KEY (nip);
 :   ALTER TABLE ONLY public.dosen DROP CONSTRAINT dosen_pkey;
       public            postgres    false    203            Y           2606    17395    index index_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.index
    ADD CONSTRAINT index_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.index DROP CONSTRAINT index_pkey;
       public            postgres    false    207            U           2606    17367    kata_imbuhan kata_imbuhan_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.kata_imbuhan
    ADD CONSTRAINT kata_imbuhan_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.kata_imbuhan DROP CONSTRAINT kata_imbuhan_pkey;
       public            postgres    false    205            M           2606    17337    login_time login_time_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.login_time
    ADD CONSTRAINT login_time_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.login_time DROP CONSTRAINT login_time_pkey;
       public            postgres    false    201            O           2606    17342    mahasiswa mahasiswa_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.mahasiswa
    ADD CONSTRAINT mahasiswa_pkey PRIMARY KEY (nim);
 B   ALTER TABLE ONLY public.mahasiswa DROP CONSTRAINT mahasiswa_pkey;
       public            postgres    false    202            ]           2606    17415    pencarian pencarian_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.pencarian
    ADD CONSTRAINT pencarian_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.pencarian DROP CONSTRAINT pencarian_pkey;
       public            postgres    false    210            [           2606    17405     program_studi program_studi_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.program_studi
    ADD CONSTRAINT program_studi_pkey PRIMARY KEY (kd_program_studi);
 J   ALTER TABLE ONLY public.program_studi DROP CONSTRAINT program_studi_pkey;
       public            postgres    false    208            S           2606    17358    stopword stopwords_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY public.stopword
    ADD CONSTRAINT stopwords_pkey PRIMARY KEY (id);
 A   ALTER TABLE ONLY public.stopword DROP CONSTRAINT stopwords_pkey;
       public            postgres    false    204            K           2606    17325    superuser superuser_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.superuser
    ADD CONSTRAINT superuser_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.superuser DROP CONSTRAINT superuser_pkey;
       public            postgres    false    200            W           2606    17375    tugas_akhir tugas_akhir_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.tugas_akhir
    ADD CONSTRAINT tugas_akhir_pkey PRIMARY KEY (no_reg);
 F   ALTER TABLE ONLY public.tugas_akhir DROP CONSTRAINT tugas_akhir_pkey;
       public            postgres    false    206            ^           2606    17381    tugas_akhir dp_dua_const    FK CONSTRAINT     �   ALTER TABLE ONLY public.tugas_akhir
    ADD CONSTRAINT dp_dua_const FOREIGN KEY (dp_dua) REFERENCES public.dosen(nip) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 B   ALTER TABLE ONLY public.tugas_akhir DROP CONSTRAINT dp_dua_const;
       public          postgres    false    203    2897    206            _           2606    17386    tugas_akhir dp_satu_const    FK CONSTRAINT     �   ALTER TABLE ONLY public.tugas_akhir
    ADD CONSTRAINT dp_satu_const FOREIGN KEY (dp_satu) REFERENCES public.dosen(nip) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 C   ALTER TABLE ONLY public.tugas_akhir DROP CONSTRAINT dp_satu_const;
       public          postgres    false    206    203    2897            `           2606    17396    index no_doc_const    FK CONSTRAINT     �   ALTER TABLE ONLY public.index
    ADD CONSTRAINT no_doc_const FOREIGN KEY (no_doc) REFERENCES public.tugas_akhir(no_reg) ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;
 <   ALTER TABLE ONLY public.index DROP CONSTRAINT no_doc_const;
       public          postgres    false    2903    206    207            �   �  x�mV�n�H=3_��ޗ�l%��D�̥z�:�Ȁ"!h�~�)ۢ$�|p���mEB���
Q��}����O�}?��}��}mw�����~_�Xń����g��u�����A��VC��Mߖ�Ǳ�C�.����� ���RF	���7�u����a?��ͺv�S"����Κi'A,nS}�n��þ���}����!�r��S'����êO�k��7�Nv�&#I9�%$F�'�Vq"����!�Zt0��8ԟ;8@,�V~��K3a I*	�-���VJ��m�U�M�ԟZ�=d���b������Fq���v�$Z���^�8Q|���FF�tdʚ�fDE�����R��E<��g�����#t�����4�8��#�N:�z��(:^D��'��ǡ�a�VTqG�2\0N	e��QPt8��2v}>�-����0�f��@Z�h���<�6�,Ȫ;@h�^�n���ñB�;������j��l������T��\ �܄.�JFk���2��,5Һxi'�*�V]��mA��)��ل��ث8�H������R��B�$10v*5�OW��-����̓��ѥ)(	TGBಜU}�����"��4a��k,e$I�Ӝ9e&XRST���a[��s�L@�[�4A3��o��h^}xj�e��e$��X,��@8T�9=���XsT�A�ʓ4��3����O�����g�]p�$:�&�"����(�M7l�/*lo�"z���:Rκ�5p
SՋnV�xB"��u�>T+^E8��&��k���Ь�eO��}�0#�x��,
s�o4�ݑ�����ӓϔѤ"�h��&�a�s�p��.61d�c��;��	�cVq�cTʈ�Rd�mT�a[���w�[!E�!�ZS��yj�o+�&�}Ĕ�F��[����%�f������KЮ���4����5�[R��R�eh ��\�]Q#hJ2����&[c����xvc܏���D.D����ғ,S�`,V��.o����;��6�Uã:�@��'�-����aU��c\<���,�s�h�@F�P�I��c�X�\ϋk����Ļ��,z���i����(K�Hԫ�(���[�3b���������f��"M�%�LY,�#�z��_��~��_?��x�qm��=�9CgK�"�W.�}τ��fI���O=K�f�p���ɪ%#�/��RL����;���s��
��0��]�/_?e/��4:�S�r�X9���]:�$��^Ȓ��<�w<�(x�d�XrY�C��YX���p�V�52!lܡ�ܴ��"�>�P�'?�����t\K<��O�}($����ڋQcLbT'A�����3����,�O��o$��~�q�^�)�ru��{�K�Z���@Gu��8&~R�Wl��nf(X����nmj��<`���������{���/z      �      x��\I��8�]3����@Mw��D��5�$�����}�:I@��R�/(�1��V��=������f��1�I~/�����5��㷬�,O�$��1m]�Ŷw��x٘ݯ�[��-��j,^Q�g�ũS��+���p����ef����=�CR����)���澅9�/�����5���_�
,��n���I�DUf�-�cui6�[�95�Ӹ��C�T��mw�����*
mJ���8�ˎ��z���m~��la��(J�S_w'�97�;�N���nz8�cY�ē�6.��-!1{|��Y��(�͊o�\/8=os3�=tn��j��5(&d��q�a���$+yw�bD5�t�>��q�`����L���f�8�3�E,�lJ��9e����S1'���n�J�V�=��+ۘ�{������ia�$���~h�w��&OQbﱀ��e�f�r�w�����yE��U�b'Ǉ�0s��wV�HdS����[�@�آ*�iih�W��*!a�¢�i���wP�"�����ʱ׭_*e,N��4��A�ye�0��s�b�ub�Y	���u��,��/�u�k���lw�OY]�}�����`贐U�R�̮6���he��֝<�e�Ĭ�,�]����&3E�)2kz���lJ�������5�����+
k�t�ؗ���=��)��+M�ԴQK'e�T���m�ե�5H��oqi����vy�)����[�,����1�A[x����-rXM���0��ӴCqn���SG77�A��Dəxq�-�b8�SpL���_�Q�)a@3ZnM��ܖ6*��tѭ�5��oA�ZR��@��\ԤZ�G��d֠(��U3�R��V�U�S��'`3�F?�^y?A�	�u����=������j܃i�NP�hx����˧��"�*��M�]�(O��9B�w��5����߶��0�������j�E�#�! �_���4����3u2�M�Fd���N �D�i�h�i��>N� J���l�I聆y���=�;ǖ@�J�@���W�>0��@X���Sl�i�+,]�#�:����4ȥ�ڤ��>�V��ݥ7�aΎl+z,�Kx�|�>O� C�\kV`���K�W
������g�n�{$��5��h���s��Z�1�� �l���	���>EX�em��t�L*JT�B�f�� ���X����`��(��13�ɞc�,� �in�eG����B�Pr�J�(C6��t�#bS@��Q��0hj����[�DqN�zD���%WCn�<͋#$��]�^C��DɚҒ2��ϣ�t�ЅŽ�D~�qfň
�p�>+�W���W�
*�ܸ~�s`n���U��lfg�'��P��ɋ2088�����o՝'	&B�{W^�÷���9�ߝ� �d�,�l�Lr���ɀ,k��@U+�YRP
���3�E,�(�$� �����D���.�����e�(�&;zI�W\xCIҭ۬�!�_`}���S.⌷ C"��:��}lP �<ϛr1��꘠{��K�X2>��2���J˜|�W�Xj���c�>��T͓���V$���H�^WH�- k^i�9Qd@�GAJt6��[pڤ+��I��#JG%�f�]7*Yon���s��c^�HY��a)f	q3��5ho I�� !}+�c3��~V�.��w�;%�7/T�f��z��P�=(�V�˒��ʇ]�,2c=2��FX��N�L0P�?�E)(���B�� +\"�׸ ����R'W��N6��+��Ե�. pYY�#�5�oʷ3a�A����E�X����g�Q���b�ն{����RB����ԯ��"l��Q��E'_����� �W�ܰ����b�5�m�Ĝ,�y+7l%�!� �jҶ˯Ok
:�1����sDА_@�x���^>4J���m/'�P|�1�dyf������kE�����ς=º��f )�my�B@�7��³�G���V/�}�ن<�>y��:h�q'Is���Neܛx�k��?�O ��bᩃO�bZ܈׷���Y��F~��:���)�pm��5�˫)��[\xA�Ӟ8��9�{�'Y% �%�*�0�_@���7�3,s.�Q^~i)�2V��&�U�/>9QL�n�3��m ��`�4�i������=�]ީ�����#py���<(&�û(���RBX�&*��l�@A�2H��&����}��b��=�g���s���_�W��\K���i�"�"F�[%���L#�x�	��ú>(}�D��f(D��!9k�v;&�:�PA�@�D�_�妅s8Q�yR���+a�6 ��#2���cn� -��VE�s��xg�T�y������W11nY�pw{�'��K:�_�W@�� 0J��q��V�q���`�7x��?yB��M�!���\+{UF,�
�#뤩�`���]�e�%*��c ��������p��2��
�J���%W���K�" �r��A���N��|��C���<�̹V#f��za�k��|��:ȉ�\� ��b.�ᄽr�Q*��.#�	 ͿΪ7��_�6�j����lTWS��a	D�߬����m��w����]����յ�]=bJx�������1�l�%���V��98�^�wɍ���v��GUʯ��M���Id��<�O��0�q���" "V\)9�晴p�g<"�y��Xֳb�k1��s��T� -+��Dur`�v	G�b�{���,��f9��`��n�k��i�[��K[Z���=(��n���Q_�s
P�pV҉+U��H������a��ײtEi@�@Y�����(���kT�a�]Z�Ϊ���(��Q&3�� R��O�}�>�Z�0�����sO�D9lش��y�1%L�nN�4�|W��8��~���^�iy9��ׯ!��th:��<5�|��43���ϲ47]p�&�^�	�yeDa�nQd%ނ"���X8�ue�qaUdH��N�f5u9��ha	�1|�����ܦ� �)��:Z ��͊���+�mAͯ���忂�9`��Ͽ�y�ұ߮�3�ݟ��~K���VWC�TǸ��A�������y��	"l�	���N'�9�:���E٠��'��8��$�Yj���
�ȹ���A���@�QSJ��ҩo���p��@�QAR_�v�_b3�.Yjߟǜ�Rj9���$��7",+��/�AH~�h~�}��_p���*r�8ڢ;��	�X��\Œ�ϭ�8�! ɡ��Ȧd�؇��M�s���mmi�{B�#��!�H�2�Q3�
`�N��(c�I0o�XJ9��U�/&���,L�2���Խ%�.8fٞmF�:m���K��y��eO�����¤d9L-�����y�ڗ
��T��WUQ�%5%ˡ�f5u�#�)�nLS��7��l�ߴ�d��$ڣ٫Z��sS׵�]�WN~�㼌���'	���R��[R���*R�5O|mFs��:# h��s��45���^��� ��|AA�(���͖�Z�W�+8͂ws�};���Y˂kKC�+#��i��hQ�����֯a��C�%�NyEA��O�۠�![puE�ڂ�zRE�E����&1�tv�FpS�Q�G�����E|#��h��(����ٵw�)-ې6GejHٛ�K>ۦ���Eےjxo��2 ���}~�K���+�m0���>��� �%N�e���\+����"Ex\>�����{ӄ��ʇ$̫�|ay1#Z����$e
jĊ���
��q�Ÿǭ��_�P��������뮌�&�N�o��"���D[.R��&qH3xrˏ(.�Y�b�N�õyu*rj�%�Vß�(5��{�\�<�ʏ(�`M�gHeW�.�*;���&+\RU���`<]T,��G�����^�qHyߨ�(�+��z����5=�DQ��� ���}64�C��h�]S!�sZ��C&����I�:���P�w��dkf1P<#� �ۆ.�ɓi�-?�K�7@6G*�S����ŎO�7���"'7��$Y��\m�CeP �  a��4�""^�=�ҁ��z�O���Ҋ(B���[d��
���^
[*4Ye�� �T��'��E��!�����'�=��AUZ�S�6lo؞y��.�\���9�ɳ(�Ya􊸦V~�>#����y���J���q��/`ܟ�H3r��4-�TY�vYlͯ�EF��-ׄ�x
u�;�\��|��=���@)�D�a� ��^\�)���l�Uo�H��� ^�#J�\,�tk���Anj�9��i"X��"������|�آ!��6w�;e7>��K�GkɪZ�U��Q4NE�����qj��H�	��Q⠸X����eim&��ڴ�6	�O�����"N�_=h�m�JO�W��0z����y{N����8Ґ_}4?�:,� :�4�s-}_�fN�k@�U�S&l���T]���������P}�.oYj��(�#_�e�q�2��n��;���W\\��M� �[��@W1e1�4�{��T�Ib�{,��-����X�lBMc�y��KrY�-�Uo+n�C��+���~TfG�!7���@��ߖ�*-ʈ��uQɸ� ���Q sNs�4��w�JF,Œ�X��Q��o���˼�{�y�/�D��nqqTF{��eMy)����vD9�0�#�۩�I��9DZ����q���Nq  է�yQ�ˎ��������PG��(��w؉�G|oN-���|Ӗ��:EM��u�[Vff>�\���3c$��W&%i��5u�0Nt�M�_�J�K��� �������d9�"`�"�G,o�jK�q�m_�
uS�^W&�6���t^�Ρ�YY��5��"K'(.����k�V�T���t��L���q<�)R��"BHn�O"]xUE��oNsS0��lљ�,�&����d9U!ze���WL�NN���Hɚ"��kF��5e�@�W���]�MmE�B:]��̼�pGࣂ�W^~��j������}*�ꛂ�o�cw�W���M���<�}ޞZ�@h�[e����ܟ�����xmb���*2k�e��(x��W�<�4��TdH�q����-��_~�.�c`���<p���}Ф�\;�af�]���^�^��s��~Q&](|�6����@ЯA(��4݃���a�wn0����~^?�#�q9d)���V� �	�M�B�=N�����VĽ��6�g�a����^����<�:H�"��Y��rp�p��p:�K�4`QeǙ���} ���C�!�i
ӯ��J���A�L�E0��<:����ve���ˋka2+���q�۫�sOj��7EJf��Me@N?��Y�_�5�����.�#�Ŵ�ۿ��ʀ��x��̺2�
��[�W�Q�҆�]��L��8�I�=�A�����.?qr"���Ǐ��wK      �   �   x�MO��0;��L�s��BRҢ�є6��@/���XF��=���p�Dn�ݸ88*
�@�RO��맗�֚j��&]��=<�t�!��L��� m0�aq�|J���ŭ���Z�����t�����
(�Б3SVΗ�?��nj�z���T`�<�/�����!���9�^n      �   |   x�]��� D�3DaZ�3����E@�a)O��}|�ӣw��A X)+mq��J�0�(m�z���۰3dI���/��#�{��쑙�p�n�Z��G�;���8�2{*��K�/�����-�      �      x�m\ɒ�u]��_�"�a�L�ITr�"�*3�k��"V�do��>� o=���� �;�;����a�9_�6Զ����8۶��?���~�ٜ��u�)��i��������<�\n�����&o�������d?g��ﶞ���}1�Ə�ܛ.<���� vǢ]j;�ɫ�s�o�g�ښ��wz4]�7z[ׅ�wf�z�nSt���Jˁ���q�ݡx��l:�ټ��ek۩��ŗ孱��?���5�l;kZ��$v����ev���7��3ɷ����8�p�i��7<�'�َ��fX����7cx�� {��N��+,x��z©����a�W�41�����;�G�����s�ŧ���u4�Ck�Y�N8�*$S�'�;�2A���C� �V#�����Y��+n�ŁO�o;>��� b�u�c_��� �񖊔����*���X�Ȝ���S!�;p�VG��K�(�����Ž�]�� ��]e�����m�Ab3p$�L�p��7�ˎw�����q��['�f|A/�
�gGho�s��.��6��x��
M�.xH�6x�۴Pb��>��u��)j��\�~�+���tg&(��O'۪Ow�B���W�syJ}������l\^��ˡ�hˌmO��d6S�ơ��:յh���<@	3�76W��ʬ`_��;(��9�/�)#�f����k�	w~��Q� ��$���>�1:$+��i�T?0��=�G�}_��0�u�-�v�l埽��ћ[?��笄Zًdw"ۚ��
�&�tuo��f�y%� �cm@��r��j�����y�����=�V�˥7� Sh�5Y�E-&���^���ٔ�Ϗ���T��e�
��
���O&�_d��Z�f��PK��1̢���?γ9P+�y��	)�az�P�
��a��#1ԷW�=Tf�_� �{@Mk
�3j��h��VY�B܀>�A�o�xoӲ��'�����]A��7�N�R$.��� �Ve�ܱ�N�D�6�0�`p�)��'�?^�|[���c�Z�`+A�3r����N�ASx�m��� l��m���K��2A�M<oc����_��	u_B�94�hw!s����(4#F��q �W��I��o__����`�����_�Yp�{|5��1z�XB`Ag�>'n��y[�
�� 3��N�H-4�5�>���f��O*��vw�$�82�잫 ���!@<ʚď��G��k>z�)ͼ��.?9������t�w� �Lӿܸ����"� �,Q��k�Ř
��'���dSj> ���>Y��cK��pSC�ՁoآѠh���a6������D ���V��_7�CQ^ā��q��2"�{B>/6���؈�����`E@�l�(�����y�>�|�,D���e4�XD�c�/bb��fӸ^�M���
̸T�Q[[��A �������셴��塾V�p�U�7�L �m��`�{,A-6p]�K��M�v �-t������)���,À�$���~�7�����z�ҧh� ������[	s8p�/L�em����W��g#aJ4.�<{ú�O(�"�ر&ր��ۤ�M���m���:KWYu�] v�fs��]xx,�`�A�@Y�U��&�Ǟ�jS��ߺ���J�D��̳]Ɍ�h4�w��FhL߭S���f� NB0 @��u�� h��q�u�Ⱥ���|HX�ة�պ�a�T��W��m�8���2��u،(� 0U��_�Hy��Z?E3H=�p,�Y�cl{c��DL.\ԍ�d�%d��,*���p����0El���.B+S�	��	��!�D�@�z̵�� ������!v�?�#���,6B�1���NM<o�tD�Q�*?�6�댽ZJ"y��:��6���!3��f����и�����������|D�Cv�GV�FX�C4>m��sXԋ\R�՟��	>�}7�����N��c,���K0�$NJŃS6K�a���0(��Q.��"���"�Y�U	��.T��-}J��^�|-��#���眈�i�6@�8#��րO�,Y��?"��[��w����'*��n��C��L*e!�Cs��HlL�#2���Pz��Q��`��_�m��6�B�:O/)�Ig��Q�C%�hl�wwf�̽G��h���r��Q,������Rl>�"�kA����4Z��Hрw�݌֣U�!6~�7C�<FD���E���L	�iFȄy_�5%�׽Fs�}��7b��]O�I��%�ݥ�֡�&�J��dJ��$~#`��q�<���,m0778e�OE�R�-�۫\2��RR�%��T����_��6ET����0�a��
����p�������s�����\q7+{Ɓ��J/\���9��x��`L/^�_�\����$SyI%![BۈE��v:ÝA�	��<2$9C��)�X���dSݼI��b��d��!��3!��,~(JA��><�H$2[�vX!%���_�D���\��(�b��� �)X�Nv�҂�du,��LX��V�ݩ�)�� q�c:ek�"N#�yG���(�G�A�����?����m��N�B7벛m;�RO�Ղ�$����Ňd�|/�E�aj�����N��\(`we=J%n�D�o�e bF�����]L�Qfs����d��I	�#o �X�ɿ�����õ��W�C���Q�!b0.�D��j+aԷg>��� �Bc�<��&A2�_�|�a��Bh���!�T�R�s$}��A<8�ŉ-�ڥ{���^.��p�
�S���t���!N��>@ʮd�D�����y9�h�%�o�Tt�w|���0���Ix�^���)eK3�H�"�1g��Y��˷<l��=���͌�u�˅1��.�ѭ,= $nT�9 r�~~�X5���^��y9|�Y�o�������앇�*hyh�����/��)MtٷVC�<�m�pT6�)���a�J��X�����P�6ұ�"9�F��}��0�&�$��>^�@������c��������`Jo^�1B �4����(�↑g� �l&��fm�P�O��`c�Rr�_?9`F�L��!���QG;��z�˝kj8B���
}��P
L[�-�7}�!�fX6�s|�[��j&�K̏I (ۯ����=�VM��[	�x��c$Dç�&l���b�JC�>g�9"��	��J�)LG���0|�5ID�A��\���; `-y5Q��HVD�Hų��b'���s|%��3��7�/77��$��0��l	�
8 ��&��������N��z� ���ɢ%7�'�.�� ��=�e�Hw�$r�JFt:;�te9��z�Ҍ�$�Ԍ]���r�A�}\��?��&95�D$b�&X�. ��' �)���_Fπw� Q�6������x����Oa�� �n����%�?����UM�y�$E� �~�:7&f���t_4�_�4T�� �Xr����/���?������?�����������T��?����E��.���&0a"�>I50$�Ln�8grYx�I�xV+� 眠�g0٘F5�s3��$r���h�@?�/V�%�e3�/XU���}���Թ����2*���ZUחcnb����٤��1G�ږA��Z���Z<j�F���߆�>�Z� ���>�g@:��ũ���5-�����l',o�z�pM�@;������:L��TU�eu�0���R ����#lI���H\� ��{�1퍘w!�x�O�H��Xq1��c���v��V�.F2�[�Cr����)�D�0�O�cJ���U$H �`S�D ��V0Il��퓝XȒl���r�de �Y:1�/7bIr�0B�Jm~��^yb���QUf5��t8��+��Z�Z�.���sя���{� ����1/�v:)t���r�M��p��.�'���Y���I\��Nl�ͱ��0��tnP���	��]��{n�e'&���oGi�4u;����7���āv4��U�� �  ��3 ,�N./�ЋIw��_X �3�.�l<p��L��z�C¸K������M�d��1�P�pww�?e���B������)��b�"Z+���,��^� ��K'�*�LQ��M�n�٦*�2�DGEIZG��j���E�v7M� �շ��7�9D���B�m!�>wI�Q�U�j���\�u<����M�S!�U���u��d8W �����;V���o�X��k\nZ���Sq���C�ղ;���C��8s����p���N�{���My�I	i�!I���7/a�k,��T5�*%>?��&�Q��M�<�Sx�J�7`)*1��:��I/_+�%@�M�,��3��ج����̝\dQ(�T)%��K�N�MR2�|Jq���R�;�T�ʶעoX��ab�}o���qa�!�3ĝu4/�#	�߶�M����LWt�ɋ.V��F��Ս��t�����ݼ��j-b\>�_̎䛂:���T�:��T?h-SD=��1�4� t6�T}e��1E�X�]�]]
;��)�*�u���^m�K�b�t\:�uq���^�S�r{*���$G��Ҟ�=�����xf%�N�φ��U�&ܰ�R�33�3�86q�����Ϸl���!X��L�_�IS,سaJ2���r�3���(;��*޷�"�6�&l\�����"��""K#̲� �뤥M:i���雴\ ��y&�[��Pt���7/Y�����]ToʀX�2b��;]b�,k*ލ��/�#~��C ���!�ڡ���$���Tq��m.d? N�m�pdP�F����X�`��X<c^>VL� YZ�RK��DZe���l$�T�0E�c��� ]S����O����>B�ئLٜ�c��c�+��+.2r(^�te��h�]��u�AȌ�%�S�r���?O�sTC?�)���x�Q!��¢>��1)Ҹ��*��ὠ:(oW;��DߐsQ�N�d��\����r�?�H��3������o�
!��Á�1u��q����ɛKg��`!���}>��]�C6>��%ōE?ӥ���~m���d{Som6�}��j�c�.k��2��K�e%,f����-�Y�g/w��Rg��g�f_Mk��QP�����[��~�Y��r�|�h�8��6�Q>ŇgHƵ�������e�&�}�K�����3��哣(U,7�V��]��2C�7����~(g;�[x�g�K�q�v��mʋ��}Y�'s%a�Q���!z�^a���	C�΢����6K���B/��@x/7Ic �V֌��ރ}9��穠@l�$J�M�0�\Oͫ����g/�*��e�� ]vw8lX����7�l��<�X��N�Ը���r漪ߕs�����tf7���8uѯo���J�~ ��t��(�s�u��uM�P��`-%[��e98])�I��iۗo�A�� YAov�vKv���d|&���6l��;�k��%�=6s��̤�y�'�x�W,�>,F۱2��0.1<����!�U{H%������1z}�|jd����oBS��g$��eVGvp�P7����9Н�V���U͚΂/�_��I�~��&�X ���Rk���X4&Жj-d�4�O�h�R}D�� v���Ǧ`7��|�����m����A6sc�"�4L��ҭ���b��Ŧ�L�W�G*,}�F�RD(�>���;EHޓh�m(�''(�7G[�;P�8+L)	����T,T3�ϭlL$�������xMܚ{ �:�)Z>EX���,����n����k�7�Jg�%k���(�$�0�>(
�D�ZZ�9����z�+ߠHa#�WU�~�e�c|�țZ��?����%�@#:x����C�����<� ��JM�O
�|ƢC;&p�g�}T�߅�[��؅l�6i�zhϰ,6r"
�%�m.u�`#bz L(�8��>/��E`�҈��Ls�����$�m����(��ljE7���J���=������w7��^�M1��A�֊a��H6bv�OK[�;F[9/����<�z��E	��2�Y�^"�����g;&Z�Y/+έ�Z�~��r?T?����"@/~�p6��>�Q��P���}Wb�N��G�����x���롽"����vzw�	0� �>��3�pW��)�HX(��ø�R+���%f[(�@ص^�R�m�ǯׯ����̳2V�sJ$�O�`sJ�`R�K#��2��:�
�."�N	y9�䩻��T��|F#�4W=��-솅���9���b�e��H����Bojs��)dp."���>QQSQ�f|�DAU~� �=���LE[��n+- ����
*:I�b�@��(�b�������G��`��D�/���P��Q@s�n�Բ{�M6d���`۰x�h/��6��Tr���-k�R�P��@OQ��;����8!RLM�J^{�΋?��L<oN�$r���(�ђn���8C��l�YZ���:I}W��%���	Uh t2��],q�ȉ>̙9H���:����Y���n��P���׏��د�k ��ʳ�_c-[^�|t�Ώ~��'n��1O��z?_���w�����`�:;c�܀o�uk�4�z�K�W��]��4i�v�ΰ߬�Ӗ-��t�t�~�Y���Wy�=�f��ٿNگr�Ҿ��3*l#QE���S!��g~s�)�V�r]T�n���.2�2E�ȃ�A�0���x�SE7���+�i[>'��1,��	vk�E�Z��+�2|c��'���V*S��������DZ��S�l�{P���`����ظY�2R2���J-^�6b�I�6��*>lL
%3�8yD|��lf�Y"�т~���|�ȸ�8� tW�	D��0P ��a��J�C��:�y�[] ����%�E"��KP�ç���5�`o!�,/�RO�H)@Z�� b�ۜ���i[7٥j��@[A+������0����{�V�#P�_���&���Ө��}m;J��L8%}�^6z�g"�����"�b������-���,k���_���oَ=[%�u�8�	�e=̮U}��P�$�d6ĳ{u��N���ƍ�W��"�а���7�؛ �o�Y���.)?Xr�3V��У���|.G�g�Wgگ�%G��*O+n'6-vj{6�Ǉx�U�����N� ���#��"�.����ޑz�t����ac.d�)a�"v�JE̎�i?%O@+�:��ʖ�t�A�����T<��%��0�4;d�[�.g>&x2O:K�f^���S ��})i*��m�=['��Oـ%����j8���"euh�3PL�$Z����F�{v5�-�W411�TBφ�*�O�UR��9�r_�M���<�Ϻۡ`j���o4����<Ȑ�Q��u�g����0�on�|��Kri�[�~�f���v�O,�=6ɸKR��v�C�X߈�AQLh� ����(g�	��3{�oM�V�R[�.0�;睴P��*����U~`,��G�z[��U ��|ۓ�f�5X�μ���<�88�l���r�6|�Ĝ���N���?��1�7+�~�5�M�*=�W$$-m�U�9�;q�ܞ:�� s�3�5�����c큶bfg�+L��xLq ��x�D�*�cV�:��,��z�c�$"�������d�yT�����3�a�1�}����o<&�|#p���l������?��~�G      �   �  x���Yn[1E�W���8H���T�6v'E�_%F��/�+�?�Kq�T%h�������r��/v>�˂ݝ�;v���#tu�Sr]��=���K��n�L�{$?�Cp��
�k���a(�E�;��[�>��{W�2��a��h��j���������U��}��e�����<1 �RRM���A-2����sj�s��i��`�@��b2�-Cf�"�7(��u��r�yƌ�,Nƣ���13O;��7�L�����E�m�g�E!D�b�����|��s��*D���E�����qw�C��2�T�W
OoUm5Q������S!��j-irCVy�R>)<f���C�iY+��w˺��\�6ڪ�#:�hN�㚡�^be�"���	h�����d��Z�����Ao0>��>���l_28����@����^Q��qZO��0�Jm��͙}^�?���o ��CR\      �   a   x�q�I����Vp�,JO�+I,J�
q�	��f��s��qz���&�dfx�x楔�er��|S�3�\�9]�uS���K��b���� M$a      �   �   x��;�0k�0#��.i$YO�.�}L����r���p�}
�Zo���x�?��sn��%$��p�T������H{�	�k��[(��������N����k�y��r���t�"�%(���9
��|��C�1�      �   Y   x��;� ����H�F�G�q���n+�D��e�t��R ņQ�9{�=L�8aD}��������]Ŭ|�/�����W��*B�      �      x��[�r�J�}���zq���]�o�Hɰ�eH�
Gܗ"Q$!� �e�S������ɬ*�@Q�rOtt�/��*3+��N槳������y��9����!�qz㯾�ꏃ��?����q�����ڧG&#0�M1�zb4N�7��?�����w�����>/p3�w�z�}]�=��{b�+��é�ݻ���ww��O<���?�ߛld�F�RLs��(��l�%f�0ZV��e*62�b�r��/Q9_��L�R�Y�ī�k����,�*��E+�<�,+Q�e�U5��%�i)s�ء�tI��o�*/Ԭ*A�Z�E��r�Wb5W�4m�4�+�q��&4�9/��S��NG�g��j�R�De��4�{�M���Ųz�pQ��3�_����� �Q�T����� �X�D&.W�W����<b�%�C1Q9x�+)KPo�.�Z���"T����*U�FX|/e��~�G�=@kʼJc��-3�E&�ݨ(�0�
����c�=P���tD�=����gQb/Bz*���c�J�Bk�ȵ���#7I#/Q�����Cq�֠��=�q�ݪg�Vb�b�\DP��dJ��劍R�Ƞ�?���8;��/��8k���!ԭ|�	���kV{!��nH��k1�j	#�`_0P�P�i�_1yeʸ!�6<��"Z��"��!J<�V��E����kq��M��N/��O�t��_��I��*Y�V�Jx5�4W�R�d
X�ّw�i��DF)�!AA*KmK��<˰�w�����;~gc�=�qB����x%��f>�4��D�8�h�L-p��~��huInd%�?w��G �'_??>�x=(����Or��38BYh9����PY�E"�\���к����Zx&W/���t�M�����7E׬�D+�~�{ZK���L9t�s�!�n� �&�J˥�Ok�-����ށ�	�Y�����1;k����p��d6z��,U)7xO�̿3(`�	� �%�Ԥ%��A�s�n�af��N騠;���9���Y���`(�f��%$�䖤��u�|_��H�����w��v�:G�9�߱�u�9�ܛ��1�G�Suq�wt�8�xoD��F��� I�n� 1M�.�!���
�7���J�l-��P��s%�$K2���p����{��
Q
9�����0 ��ck��QX�)�6�(]䲀��0DC��A�B)1��EU٦$�:@����!K��5��q�%�b��v9MT�Քv\U$�X�f^0�p�X^,�҄菉�Ȟ�!�-�0�۱�6D��x=MA-�,TbQA?,\rbǲ�W�<JZ���q��qA�S�O�.�X[�Ǉ�!]+��p���C"�Bf�|	�Z9�&yK�oki�=��܂OFm��G�GGG�'�����4[���vB �3���˽�?z�eO��ń�~�L�o=���L	��O�����Z�K��x3�O#�����?z�a`�Q�2��uп�=������O�|1��� �������;��x��uI4�f�9?�7����Z*ܽ߳�+$7̹w���ލ�<��t�
��֤&�Ak�6�$i��H�Wu,�J������lj`�� ���|B�y�l��C���9��:l�H�	L�mz[Z�4�R��O)�*"�+��}f4@-�>jh�&���X,��!��\��Rlت5�����/��V�m���P���ó��b��57�9��-d�G���Xm৊�L���tj��~0��AxkS�F6���p�)"!���^�|ڎH:�}�A�[�<0���9����VO)
]uN;���NO:W*M6~z�w�)��,l<|d������p<�M�b�O� ��s8���wd�㞏�]�_D��	&7Cq|������z�{쁋��j�C� 8y��NL�$uQF-�:UPT����m�l�pĪ�3^��1^$�!61Ye9�ărw����O)���v��77�iI���ĺ����.�~�rʹ6n�qî�Q��2ZI`?��<���xZ�]����In����t	DGOi��Q1�,|f:Ti�f�<[#V�s4|׉��ɱ����]ϲB]��V�s
)<GH�o P���f�B�v0�eဏFbE��	d����0jV��i��	0��9�T��Xe�={��iZ��TGh�?&@��
|�^��r�ľ?
��:R.�v�:q���|�5C���a�BN��'�z+������Q#um����pbű�<*ٙsGk���I����y�ˌ����-�u�Br�f'v�`�6/��Ti��H�[�󸦹����1���-�7��m�څ��0u|����Bi)D���ܾ鑌�� h-�>�Yg"r!zQ�:��ȫ����T���B�8�������qߟ���d����i�/�o���@P����f������G�! j��x�p>6��ZX|+��o�3~�v�ٚ�d/��wX �L�<K�{]8~]'�Z����+.�0��q�Zm���)�����)�0}�e4�����Ҫ�<[`	��Ki�8f{�HM��"6�2��A��ܪ��(�O�;���J�k�cwC����|Rف�y4W����K�gAՒ9]����^�tY\�rz�:|�I�����"��o�h�������=h7*6�ML^u}����&.�j�AB�0k���Ν�L]��.��{����A�j�D������c.۵X�I��Cd"��QU]�@��x�#���'�	���;�������kԃ#}�X�(n���_�TS�
�οK�Z���ӥ�~��}��]���<�!+�,��զ��P�26]�m�b�q�NĤԫ�ܫ�W��x����Q��d�uPҼ)���ޏ�Q`���.=-#�Z�	g��d��$1}n���B���W*��([*Q�ߜ�u���%qua��$y�&�Z3�rpel��!�C�\h��p��=tD��Xd�}K���'���[+��[�B�%W��ŒMU؍t׬�5GN���{��>L��jnw�0��s����*D��iG_�����r�}S���|�b^�wTØ>����G���ߛ�=�|��^7�q�[�a8�:�xn{������~���DH�qףr�W�-�1����7�K���=ӭ�,Q��xG�Ր�e���2���V�n��Щ��b�H��1�s�@�n�ju�����J�2�K*�ɺb�S�\QT�ً��L5��lȯ�ާ��
J�/��ҁ��^&��ZHL|�£�&�"Ax:j�jr2�zP��le���ُ�S�o�%g�.U\���2Ο��Tg���u٬�:�\{�2ZhA������j��ahљr%�%鷖3��.ɘT�m1�}Uu�VR]�jH�:��t�Fo�*�2�X
 4t��S���!wW�ZE��O�n�"[�/8-��lw��ʬXeO������;�ZG*������gE�0�d^�oiz�J��E��U?T�m��%��7�s�ic�u����nlHS��8 ���b�8��g�R?KQ�����3���!IԜ��X�����,
H4y��&	���
�J>L�,$�OfNޒ��=�]�NV>x�+�H�=�ZK�c�[�%r�Y��I�r�wcF��(w&"���U+� `�Ip~@H^�[�ByĲ#ʩ�Fz�c��NDS�-e���')��@(���r����6��$�e4^*Y轸�E�r� _��Ŧ5HГK�J\^y''�H1Z� �Zf��_����.�]�eU�����x����n�9���Ys�׼�n����v�z�x�eB�x2޹k�LҎ� �� ��u�t�IP���^��:���M��"��/�pއ=ԡ)s��_W�'H�Ϗ��:���N���Ε���;ʀ�΅���}��Ōf������qk�j2E�=���2��q0����A:�����M��տ�%{�	���^7O~��<�q �����ӡ�a$}�t!
���"��vL$FSq4[�;�E)F trC�����сi��J^d�+��oL��;<'�ȍ6]��ǤຆbT����a-u��P|��V�m�K� .  >���_�ܧL����H)7�R6�����0@�mJ��r�S����t4�vf).+�\��`���\��B�D�&~�X����١xd��r�\��Gc��9��Ѱ��%"�3�a-���&��ϛF�i�QV/�e�t?ku�DÜ�3��~���I��)�A)3zC�`��y �"�~�k������R9"�RI�R˒ ֶdE�S���������}L[f4�����d�9�P2���+)x�7�;]��J��ծ���?��6nb��m��2�����ഒu�/���+vu非��A�����'K3�i3����/�%f�e�D�K�·��%��һ<�D�A�a=�C��8�0��c]c@�GR��K�m��4S�D��t�L<��U�ȇ�\��^,&��]W��I�BEH�"�DM?O)d�=]�n�<��ڞ��g~>p��|�=�v<�{C	G2<?뜞�T����|g��mZ�Ʀ�h��S���d*���:�N.�����[_�����!���f,x7��}�! ���7���Ր�Z��9R�dH��a���R�Y�kwT����UX�!�ztY�+�>)M�5Mg��8oKE�.��l���1���9��3�o|Td;l��g��E�lf�=ʢ�lE��zR7�n�i�
)�ථ�)�ڵ�Z���	��7��ewT ���*�^*W� �C1$PlƜc�zHpݏhs�7,@���82>{�=N��n�O;"�nv�
wt iks�[Ҡ]M��Y�{ o�w�-e���_��ms��oT����d[P�<�����ۍI+S}$]34n�+ �@��*"-L������>���U�����ѵ�~É�U��n7�{J�pk�4w5ة0o�ٲ��컾��qK�m	�[��m�:�-�����O�-fgJ�s�%�8��L9a��?麥�Qo�?�S���ڇ����}PVRG�i�~0|����Rl�+�=�~���t�à�7rj��ٚ��#�R�� ���<��dyq���SvU)͛�{�a�z�3�v\!0�xS�k�i.�%�t�l���ܶ!Mѓ�ZS�qӔ0���~�$Q�+���nk�m��Q�A-ҝ$�� c!���2%�4��f��}.�6��b��Vj>�D!R����N�9�u��To�wYFm�	p�|�hj�q��g�s��4���[�k}�*�23��9R�<c��A�5��9|8M r��	���ty�E����������YU�aTq*���`�Z(�۴h4��#�k�;���<���U�{G���E?̀���P
�A'4����Ñ�׿y���O�_�ڥ�ֱ�!BM�r�Ye�ߺq�Ե���m��gW�g:q yP0�<����[�+զ�/�a0���8�ʹl�>��ϖ��y7=%�7f���c3�m?"�DO5�ոA���jF�����R{���m��0��m�/���!�O�<�4Jۮ�jim:����t�aԫ�빌"��S.^ݫy6�{bg<h�����3ٹ��Z��=� �h���ꏹm��'Q&��'M�t��b�S@��HT4��a0��c}�j�/#����!hb�f���+N�z�!d
4���#�j�^#��SNkj��pKH����6��\��d��W!ԁ2�t�-��~�I����$%�)���v�����ՄZw�v�Q���l��Γ��)�Ї;N�h�R
~!��L��:��H:}e�8�5'_�nyKd[a�^�98�z�V1���ѱx�!1@}E�o���E��f�������kif��D��tn�����A�u���7��W�Ü�� e�3�tL��!*U�}�/�EP+�-i4�8rw�a�m�8s8/v\J;��63����K.����(���y���]g(E̟��ud���&������7iN��qJ���3��b�Q���yy�]|r;=��+jѢ�^
��^j>m��"�S��Xr�"�<�Y�����af�+x�${��.2x	H�����<quHp@��G��S�l$l���ݸ��7wm���e  )Ȯ֘�ب�/v������m���ioeR�{V��{d�,r�z{�����b�_�����!Є�     