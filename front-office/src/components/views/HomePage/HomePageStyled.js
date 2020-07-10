import styled from 'styled-components';
import theme from '../../../theme/theme';

const HomePageStyled = styled.div`

  section {
    margin-bottom: 2em;
  }

  section#intro-zn {
    text-align: center;


    img {
      max-width: 100vw;
      z-index: -1;
    }

    div.intro-zn--text-zn {
      text-align: left;
      padding: 1em;
      border: 1px solid ${theme.colors.black};
      margin: 0 1em;
      margin-top: -5em;
      margin-bottom: 2em;
      background-color: white;
      opacity: .99;

      h1 {
        display : inline-block;
        position: relative;
        margin: 0;
        font-family: ${theme.fonts.special};
        text-transform: uppercase;
        font-size: 48px;
        color: ${theme.colors.black};

        :after{
          content: '';
          position: absolute;
          left: 0;
          bottom: 14px;
          width: 100%;
          height: 15px;
          background-color: ${theme.colors.orange};
          z-index: -1;
        }
      }
      
      p {
        font-family: ${theme.fonts.regular};
        font-size: 24px;
        line-height: 36px;
      }
    }
    button {
      background-color: ${theme.colors.orange};
      font-family: ${theme.fonts.special};
      text-transform: uppercase;
      font-size: 16px;
      font-weight: bold;
      border: none;
      padding: 16px;
      color: white;
      border-radius: 8px;
    }
  }

  section#special-alert-zn {
    text-align: center;
    background-color: ${theme.colors.purple};
    border-top: 1px solid ${theme.colors.black};
    border-bottom: 1px solid ${theme.colors.black};
    margin: 0;

    p {
      color: white;
      font-family: ${theme.fonts.regular};
      font-weight: bold;
      text-transform: uppercase;
      font-size: 16px;
      padding: 1em 3em;
      margin: 0;
    }
  }
`;

export default HomePageStyled;